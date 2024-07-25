<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function profileadmin()
    {
        $user = user();
        return view('pages/admin/admin',);
    }
}
