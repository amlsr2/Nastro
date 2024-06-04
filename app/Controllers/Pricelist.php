<?php

namespace App\Controllers;

use App\Models\PricelistModel;

class Pricelist extends BaseController
{
    protected $PricelistModel;
    
    public function __construct()
    {
        $this->PricelistModel = new PricelistModel();
    }
    public function a_list()
    {
        $list = $this->PricelistModel->select('id, list, harga')->orderBy('id')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('a-pricelist');
    }

    public function c_list()
    {
        return view('c-pricelist');
    }

    public function pesan()
    {
        return view('pesanjasa');
    }

    public function pesan_save()
    {
        $nama_pelanggan = $this->request->getVar('nama_pelanggan');
        $booking = $this->request->getVar('booking');
        $tglorder = $this->request->getVar('tglorder');
        $kendaraan = $this->request->getVar('kendaraan');
        $contact = $this->request->getVar('contact');

        //insert data ke table Costumer
        $this->PricelistModel->insert([
            'nama_pelanggan' => $nama_pelanggan,
            'booking' => $booking,
            'tglorder' => $tglorder,
            'kendaraan' => $kendaraan,
            'contact' => $contact,
        ]);

        return view('pembayaran');
    }
}
