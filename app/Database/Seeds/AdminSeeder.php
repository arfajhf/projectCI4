<?php

namespace App\Database\Seeds;

use App\Models\AdminModel;
use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $adminModel = new AdminModel();

        $data = [
                [
                    'name' => 'Admin',
                    'email' => 'admin@example.com',
                    'password' => password_hash('admin', PASSWORD_DEFAULT),
                    'phone' => '08123456789',
                    'role' => 'admin',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Front Office',
                    'email' => 'frontoffice@example.com',
                    'password' => password_hash('frontoffice', PASSWORD_DEFAULT),
                    'phone' => '08123456780',
                    'role' => 'front_office',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Penduduk',
                    'email' => 'penduduk@example.com',
                    'password' => password_hash('penduduk', PASSWORD_DEFAULT),
                    'phone' => '08123456781',
                    'role' => 'penduduk',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ];

        $adminModel->insertBatch($data);
    }
}
