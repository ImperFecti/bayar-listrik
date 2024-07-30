<?php

namespace App\Models;

use CodeIgniter\Model;

class TarifModel extends Model
{
    protected $table = 'tarif';
    protected $primaryKey = 'id';
    protected $allowedFields = ['golongan', 'daya', 'tarifperkwh'];
}
