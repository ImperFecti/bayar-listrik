<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaanModel extends Model
{
    protected $table = 'penggunaan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_users', 'bulan', 'tahun', 'meter_awal', 'meter_akhir'];

    public function getBayar($id = false)
    {
        if ($id === false) {
            return $this->select('penggunaan.id, users.id as id_users, users.username, penggunaan.bulan, penggunaan.tahun, penggunaan.meter_awal, penggunaan.meter_akhir')
                ->join('users', 'users.id = penggunaan.id_users')
                ->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
