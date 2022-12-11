<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Cuentas;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        
    }
}

?>

