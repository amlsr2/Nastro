<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\AdminModel;
use App\Models\CostumerModel;

class Client extends BaseController
{
    protected $AdminModel;
    protected $CostumerModel;

    public function __construct()
    {
        //load model untuk digunakan
        $this->AdminModel = new AdminModel();
        $this->CostumerModel = new CostumerModel();
    }

    public function dash()
    {
        //select data from table kategori
        $list = $this->AdminModel->select('id, nama, contact')->orderBy('nama')->findAll();

        $output = [
            'list' => $list,
        ];

        return view('home', $output);
    }
}
