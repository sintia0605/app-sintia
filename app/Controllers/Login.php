<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    { $data = [
        'title' => 'Aplikasi Penjualan Pakaian',
        'descriptions' => 'Web ini untuk transaksi penjualan pakaian di minimarket',
        'author' => '2022101012 - Sintiya Pebrina Br Ginting'
    ];
    return view('v_login/index', $data);
}
       
}
