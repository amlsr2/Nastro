<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\CostumerModel;

class DataCostumer extends BaseController
{
    protected $AdminModel;
    protected $CostumerModel;

    public function __construct()
    {
        //load model untuk digunakan
        $this->AdminModel = new AdminModel();
        $this->CostumerModel = new CostumerModel();
    }

    public function list()
    {
        $list = $this->CostumerModel->select('id, nama_pelanggan, gender, kendaraan, contact, order')->orderBy('id')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('datacostumer', $output);
    }

    public function insert()
    {
        return view('datacostumer_insert');
    }

    public function insert_save()
    {
        $nama_pelanggan = $this->request->getVar('nama_pelanggan');
        $gender = $this->request->getVar('gender');
        $kendaraan = $this->request->getVar('kendaraan');
        $contact = $this->request->getVar('contact');
        $order = $this->request->getVar('order');

        //insert data ke table Costumer
        $this->CostumerModel->insert([
            'nama_pelanggan' => $nama_pelanggan,
            'gender' => $gender,
            'kendaraan' => $kendaraan,
            'contact' => $contact,
            'order' => $order
        ]);

        return redirect()->to('datacostumer');
    }

    public function update($id)
    {
        //select data Costumer yang dipilih (filter by id)
        $data =  $this->CostumerModel->where('id', $id)->first();

        $output = [
            'data' => $data,
        ];

        return view('datacostumer_update', $output);
    }

    public function update_save($id)
    {
        $nama_pelanggan = $this->request->getVar('nama_pelanggan');
        $gender = $this->request->getVar('gender');
        $kendaraan = $this->request->getVar('kendaraan');
        $contact = $this->request->getVar('contact');
        $order = $this->request->getVar('order');

        //update data ke table Costumer filter by id
        $this->CostumerModel->update($id, [
            'nama_pelanggan' => $nama_pelanggan,
            'gender' => $gender,
            'kendaraan' => $kendaraan,
            'contact' => $contact,
            'order' => $order
        ]);
        return redirect()->to('/adm');
    }

    public function delete($id)
    {
        //delete data table Costumer filter by id
        $this->CostumerModel->delete($id);
        return redirect()->to('datacostumer');
    }







    // public function tambah()
    // {
    //     return view('Tambahview');
    // }
    // public function store()
    // {
    //     $PelangganModel = new PelangganModel();
    //     $PelangganModel->save([
    //         'Id_Pelanggan' => $this->request->getVar('Id_Pelanggan'),
    //         'Nama_Pelanggan' => $this->request->getVar('Nama_Pelanggan'),
    //         'Jenis_Motor' => $this->request->getVar('Jenis_Motor'),
    //         'No_Tlp' => $this->request->getVar('No_Tlp'),
    //     ]);

    //     return redirect()->to('/');
    // }
    // public function edit($Id)
    // {
    //     $PelangganModel = new PelangganModel();
    //     $Pelanggan = $PelangganModel->where('Id_Pelanggan', $Id)->first();
    //     $data = [
    //         'Pelanggan' => $Pelanggan
    //     ];

    //     return view('editview', $data);
    // }
    // public function update()
    // {
    //     $PelangganModel = new PelangganModel();
    //     $PelangganModel->save([
    //         'Id_Pelanggan' => $this->request->getVar('Id_Pelanggan'),
    //         'Nama_Pelanggan' => $this->request->getVar('Nama_Pelanggan'),
    //         'Jenis_Motor' => $this->request->getVar('Jenis_Motor'),
    //         'No_Tlp' => $this->request->getVar('No_Tlp'),
    //         'Order' => $this->request->getVar('Order')
    //     ]);

    //     return redirect()->to('/');
    // }
    // public function delete($Id)
    // {
    //     $PelangganModel = new PelangganModel();
    //     $PelangganModel->delete($Id);

    //     return redirect()->to('/');
    // }
    // public function grafik()
    // {
    //     $PelangganModel = new PelangganModel();
    //     $Pelanggan = $PelangganModel->findAll();
    //     $data = [
    //         'Pelanggan' => $Pelanggan
    //     ];

    //     return view('grafik', $data);
    // }

    // public function export_pdf()
    // {
    //     //select data from table buku
    //     $list = $this->BukuModel->select('buku.id, buku.judul, Costumer.nama AS Costumer_nama')->join('Costumer', 'buku.Costumer_id = Costumer.id')->orderBy('Costumer.nama, judul')->findAll();

    //     //filename
    //     $fileName = 'buku_export';

    //     // instantiate and use the dompdf class
    //     $dompdf = new Dompdf();

    //     // load HTML content
    //     $output = [
    //         'list' => $list,
    //     ];
    //     $dompdf->loadHtml(view('buku_export_pdf', $output));

    //     // (optional) setup the paper size and orientation
    //     $dompdf->setPaper('A4', 'potrait');

    //     // render html as PDF
    //     $dompdf->render();

    //     // output the generated pdf
    //     $dompdf->stream($fileName);
    // }
}
