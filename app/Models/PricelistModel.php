<?php

namespace App\Models;

use CodeIgniter\Model;

class PricelistModel extends Model
{
    protected $table = 'pricelist';
    protected $allowedFields = ['id', 'list', 'harga'];
}
