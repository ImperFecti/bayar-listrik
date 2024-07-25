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
}
