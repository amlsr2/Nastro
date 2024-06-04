<?php

namespace App\Models;

use CodeIgniter\Model;

class CostumerModel extends Model
{
    protected $table = 'costumer';
    protected $allowedFields = ['id', 'nama_pelanggan', 'gender', 'kendaraan', 'contact', 'order'];
}
