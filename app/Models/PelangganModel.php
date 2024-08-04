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

    // Disable soft deletes (records are actually removed from the database)
    protected $useSoftDeletes = false;

    // Define the fields that are allowed to be modified
    protected $allowedFields = ['username', 'namalengkap', 'nomorhp', 'alamat', 'email', 'active', 'nomorkwh', 'password_hash', 'id_tarif'];

    // Method to get users, excluding admin users
    public function getUser($id = false)
    {
        $this->select('users.*, tarif.golongan, tarif.daya, tarif.tarifperkwh, auth_groups.name as group_name') // Select necessary fields
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id', 'left') // Join with auth_groups_users
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id', 'left') // Join with auth_groups
            ->join('tarif', 'users.id_tarif = tarif.id', 'left') // Join with tarif
            ->where('auth_groups.name !=', 'admin') // Exclude admin users
            ->asObject(); // Return results as objects

        if ($id !== false) {
            $this->where('users.id !=', $id); // Exclude logged-in admin user if ID is provided
        }

        return $this->findAll(); // Return all users that match the criteria
    }

    // Method to get a user profile, with optional ID
    public function getUserProfile($id = false)
    {
        $this->select('users.*, tarif.golongan, tarif.daya, tarif.tarifperkwh, auth_groups.name as group_name') // Select necessary fields
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id', 'left') // Join with auth_groups_users
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id', 'left') // Join with auth_groups
            ->join('tarif', 'users.id_tarif = tarif.id', 'left') // Join with tarif
            ->asObject(); // Return results as objects

        if ($id === false) {
            return $this->findAll(); // Return all users if no ID is provided
        } else {
            return $this->where(['users.id' => $id])->first(); // Return the user with the specific ID
        }
    }

    // Method to delete a user by ID
    public function deleteUser($id)
    {
        return $this->delete($id); // Delete the user with the specified ID
    }
}
