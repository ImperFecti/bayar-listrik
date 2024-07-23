<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\GroceryCrud;
use CodeIgniter\HTTP\ResponseInterface;

class Customer extends BaseController
{
    public function index()
    {
        $crud = new GroceryCrud;

        $crud->setLanguage('indonesian');

        $crud->setTable('customer');

        $output = $crud->render();

        return view('example', (array)$output);
    }
}
