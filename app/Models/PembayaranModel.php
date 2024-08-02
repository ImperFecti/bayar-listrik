<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_penggunaan', 'id_users', 'bukti_pembayaran', 'status', 'created_at'];
}
