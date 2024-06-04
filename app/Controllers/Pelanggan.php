<?php

namespace App\Controllers;

//memanggil model
use App\Models\HomeModel;

class Pelanggan extends BaseController
{
    protected $HomeModel;

    public function __construct()
    {
        //load model untuk digunakan
        $this->HomeModel = new HomeModel();
    }

    public function list()
    {
        //select data from table Pelanggan
        // $list = $this->HomeModel->select('Pelanggan.id, Pelanggan.judul, Pelanggan.stok, kategori.nama AS kategori_nama')->join('kategori', 'Pelanggan.kategori_id = kategori.id')->orderBy('kategori.nama, judul')->findAll();

        return view('utama');
    }

    protected $KategoriModel;

    public function insert()
    {
        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_kategori = $this->KategoriModel->orderBy('nama')->findAll();

        $output = [
            'data_kategori' => $data_kategori,
        ];

        return view('Pelanggan_insert', $output);
    }

    protected $PelangganModel;
    public function insert_save()
    {
        $kategori_id = $this->request->getVar('kategori_id');
        $judul = $this->request->getVar('judul');

        //insert data ke table Pelanggan
        $this->PelangganModel->insert([
            'kategori_id' => $kategori_id,
            'judul' => $judul,
        ]);

        return redirect()->to('Pelanggan');
    }

    public function update($id)
    {
        //select data kategori yang dipilih (filter by id)
        $data =  $this->PelangganModel->where('id', $id)->first();

        //select data from table kategori (untuk data di selectbox/dropdown)
        $data_kategori = $this->KategoriModel->orderBy('nama')->findAll();

        $output = [
            'data' => $data,
            'data_kategori' => $data_kategori,
        ];

        return view('Pelanggan_update', $output);
    }

    public function update_save($id)
    {
        $kategori_id = $this->request->getVar('kategori_id');
        $judul = $this->request->getVar('judul');

        //update data ke table Pelanggan filter by id
        $this->PelangganModel->update($id, [
            'kategori_id' => $kategori_id,
            'judul' => $judul,
        ]);

        return redirect()->to('Pelanggan/');
    }

    public function delete($id)
    {
        //delete data table Pelanggan filter by id
        $this->PelangganModel->delete($id);
        return redirect()->to('Pelanggan');
    }
}
