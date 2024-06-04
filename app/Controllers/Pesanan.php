<?php

namespace App\Controllers;

use App\Models\PesananModel;

class Pesanan extends BaseController
{
    protected $PesananModel;

    public function __construct()
    {
        $this->PesananModel = new PesananModel();
    }
    public function list()
    {
        $list = $this->PesananModel->select('id, nama_pelanggan, gender, kendaraan, contact')->orderBy('id')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('a-pesanan', $output);
    }
}
