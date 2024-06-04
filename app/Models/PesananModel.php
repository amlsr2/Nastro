<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $allowedFields = ['id', 'nama_pelanggan', 'gender', 'kendaraan', 'contact'];
}
