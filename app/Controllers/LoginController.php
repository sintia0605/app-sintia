<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function login()
    {
        $rule  = [
            'xusername' => 'required',
            'xpassword' => 'required'
        ];

        $errors = [
            'xusername' => [
				'required' => 'Username Masih Kosong',
			],		
            'xpassword' => [
				'required' => 'Password Masih Kosong'
			],
        ];

        if (!$this->validate($rule, $errors)) {
            return view('v_login/index', [
                "validation" => $this->validator,
                'title' => 'Aplikasi Penjualan Pakaian',
                'descriptions' => 'Web ini untuk transaksi penjualan pakakian di minimarket',
                'author' => '20221011012 - Sintiya Pebrina Br Ginting'
            ]);
        }
    }
}
