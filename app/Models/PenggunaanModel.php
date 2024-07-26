<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaanModel extends Model
{
    protected $table = 'penggunaan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_users', 'bulan', 'tahun', 'meter_awal', 'meter_akhir'];
}
