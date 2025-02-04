<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class IdentificationCardSeeder extends Seeder
{
    public function run()
    {
        $identificationCardModel = new \App\Models\IdentificationCardModel();
        $data = [
            [
                'admin_id' => 9,
                'place_of_birth' => 'Bandung',
                'date_of_birth' => '2000-01-01',
                'addres' => 'Bandung',
                'religion' => 'Islam',
                'marital_status' => 'Belum Menikah',
                'job' => 'Mahasiswa',
                'nationality' => 'Indonesia',
                'identity_number' => '1234567890123456',
                'blood_type' => 'A',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $identificationCardModel->insertBatch($data);
    }
}
