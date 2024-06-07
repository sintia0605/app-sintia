<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Aplikasi Penjualan Pakaian',
            'descriptions' => 'Web ini untuk transaksi penjualan pakaian di minimarket',
            'author' => '2022101012 - Sintiya Pebrina Br Ginting'
        ];
        return view('v_login/index', $data);
    }
}
