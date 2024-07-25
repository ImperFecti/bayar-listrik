<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Myth\Auth\Entities\User;

class Admin extends BaseController
{
    public function profileadmin()
    {
        $user = user();
        return view('pages/admin/admin', ['username' => $user->username]);
    }
}
