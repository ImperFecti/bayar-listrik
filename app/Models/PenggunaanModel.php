<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaanModel extends Model
{
    // Define the table associated with the model
    protected $table = 'penggunaan';

    // Define the primary key for the table
    protected $primaryKey = 'id';

    // Define the fields that are allowed to be modified
    protected $allowedFields = ['id_users', 'bulan', 'tahun', 'meter_awal', 'meter_akhir'];

    // Method to get payment data
    public function getBayar($id = false)
    {
        if ($id === false) {
            // Retrieve all payment records, including related user and tariff information
            return $this->select('penggunaan.id, penggunaan.id_users, penggunaan.bulan, penggunaan.tahun, penggunaan.meter_awal, penggunaan.meter_akhir, users.username, tarif.golongan, tarif.daya, tarif.tarifperkwh')
                ->join('users', 'users.id = penggunaan.id_users') // Join with users table
                ->join('tarif', 'tarif.id = users.id_tarif') // Join with tariff table
                ->asObject() // Ensure the result is returned as an object
                ->findAll(); // Return all records
        } else {
            // Retrieve a specific payment record by ID, including related tariff information
            return $this->select('penggunaan.*, tarif.golongan, tarif.daya, tarif.tarifperkwh')
                ->join('users', 'users.id = penggunaan.id_users') // Join with users table
                ->join('tarif', 'tarif.id = users.id_tarif') // Join with tariff table
                ->where('penggunaan.id', $id) // Filter by specific ID
                ->asObject() // Ensure the result is returned as an object
                ->first(); // Return the first matching record
        }
    }

    // Method to get billing information by user ID
    public function getTagihanByUserId($userId)
    {
        // Retrieve all billing records for a specific user, including related tariff information
        return $this->select('penggunaan.*, tarif.golongan, tarif.daya, tarif.tarifperkwh')
            ->join('users', 'users.id = penggunaan.id_users') // Join with users table
            ->join('tarif', 'tarif.id = users.id_tarif') // Join with tariff table
            ->where('id_users', $userId) // Filter by user ID
            ->asObject() // Ensure the result is returned as an object
            ->findAll(); // Return all matching records
    }
}
