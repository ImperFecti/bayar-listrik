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
    protected $useSoftDeletes = true;

    // Define the fields that are allowed to be modified
    protected $allowedFields = ['username', 'namalengkap', 'nomorhp', 'alamat', 'email', 'active'];

    public function getUser($id = false)
    {
        if ($id === false) {
            return $this->select('users.id, users.namalengkap, users.username, users.email, users.nomorhp, users.alamat')
                ->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }

    public function getUsersWithGroup()
    {
        return $this->select('users.id, users.username, users.namalengkap, users.email, users.nomorhp, users.alamat, auth_groups.name as group_name')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->findAll();
    }
}
