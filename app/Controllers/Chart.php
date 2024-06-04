<?php

namespace App\Controllers;

use App\Models\CostumerModel;

class Chart extends BaseController
{
    protected $CostumerModel;

    public function __construct()
    {
        //load model untuk digunakan
        $this->CostumerModel = new CostumerModel();
    }

    public function bar()
    {
        //select data from table buku
        $list = $this->CostumerModel->select('nama_pelanggan, order')->orderBy('order')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('chart_bar', $output);
    }

    public function line()
    {
        //select data from table buku
        $list = $this->CostumerModel->select('nama_pelanggan, order')->orderBy('order')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('chart_line', $output);
    }
}
