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
            return $this->select('penggunaan.id, penggunaan.id_users, penggunaan.bulan, penggunaan.tahun, penggunaan.meter_awal, penggunaan.meter_akhir, users.username, tarif.golongan, tarif.daya, tarif.tarifperkwh')
                ->join('users', 'users.id = penggunaan.id_users')
                ->join('tarif', 'tarif.id = users.id_tarif')
                ->asObject() // Ensure the result is returned as an object
                ->findAll();
        } else {
            return $this->select('penggunaan.*, tarif.golongan, tarif.daya, tarif.tarifperkwh')
                ->join('users', 'users.id = penggunaan.id_users')
                ->join('tarif', 'tarif.id = users.id_tarif')
                ->where('penggunaan.id', $id)
                ->asObject() // Ensure the result is returned as an object
                ->first();
        }
    }


    public function getTagihanByUserId($userId)
    {
        return $this->select('penggunaan.*, tarif.golongan, tarif.daya, tarif.tarifperkwh')
            ->join('users', 'users.id = penggunaan.id_users')
            ->join('tarif', 'tarif.id = users.id_tarif')
            ->where('id_users', $userId)
            ->asObject() // Ensure the result is returned as an object
            ->findAll();
    }
}
