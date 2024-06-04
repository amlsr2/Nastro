<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\CostumerModel;

class About extends BaseController
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
        return view('about');
    }
}
