<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'fullname' => 'Sintia Pebrina',
            'username' => 'sintiapebrina06@gmail.com',
            'password' => password_hash('12345678'),
            'level_id' => '1',
            'active' => 'y'
        ];
        $this->db->table('tbl_user')->insertBatch($data);
    }
}
