<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'namalengkap', 'nomorhp', 'alamat', 'email', 'id_tarif'
    ];
}
