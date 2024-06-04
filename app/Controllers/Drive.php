<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\CostumerModel;

class Drive extends BaseController
{
    protected $AdminModel;
    protected $CostumerModel;

    public function __construct()
    {
        //load model untuk digunakan
        $this->AdminModel = new AdminModel();
        $this->CostumerModel = new CostumerModel();
    }
    public function a_list()
    {
        return view('a-drive');
    }

    public function c_list()
    {
        return view('c-drive');
    }

    public function pesan()
    {
        return view('pesanjasa');
    }
}
