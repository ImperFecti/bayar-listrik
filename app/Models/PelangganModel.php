<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    // Define the table associated with the model
    protected $table = 'users';

    // Define the primary key for the table
    protected $primaryKey = 'id';

    // Enable timestamps for created_at and updated_at fields
    protected $useTimestamps = true;

    // Enable soft deletes (records are not actually removed from the database)
    protected $useSoftDeletes = false;

    // Define the fields that are allowed to be modified
    protected $allowedFields = ['username', 'namalengkap', 'nomorhp', 'alamat', 'email', 'active', 'nomorkwh', 'password_hash', 'id_tarif'];

    public function getUser($id = false)
    {
        $this->select('users.*, tarif.golongan, tarif.daya, tarif.tarifperkwh, auth_groups.name as group_name')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id', 'left')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id', 'left')
            ->join('tarif', 'users.id_tarif = tarif.id', 'left')
            ->asObject();

        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->where(['users.id' => $id])->first();
        }
    }

    // Metode untuk menghapus user
    public function deleteUser($id)
    {
        return $this->delete($id);
    }
}
