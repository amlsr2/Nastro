<?php

namespace App\Models;
use CodeIgniter\Model;

class PelangganModel extends Model{
    protected $table = 'pelanggan';
    protected $allowedFields = ['Id_Pelanggan', 'Nama_Pelanggan', 'Jenis_Motor', 'No_Tlp','Order'];
}