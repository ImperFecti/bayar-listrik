<?php

namespace App\Models;

use CodeIgniter\Model;

class TarifModel extends Model
{
    // Define the table associated with the model
    protected $table = 'tarif';

    // Define the primary key for the table
    protected $primaryKey = 'id';

    // Define the fields that are allowed to be modified
    protected $allowedFields = ['golongan', 'daya', 'tarifperkwh'];
}
