<?php

namespace App\Database\Seeds;

use App\Models\KuisionerModel;
use CodeIgniter\Database\Seeder;

class KuisionerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                "pertanyaan" => "Bagaimana Pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya",
                "pilihan1" => "Tidak sesuai",
                "pilihan2" => "Kurang sesuai",
                "pilihan3" => "Sesuai",
                "pilihan4" => "Sangat sesuai"
            ],
            [
                "pertanyaan" => "Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini",
                "pilihan1" => "Tidak mudah",
                "pilihan2" => "Kurang mudah",
                "pilihan3" => "Mudah",
                "pilihan4" => "Sangat mudah"
            ],
            [
                "pertanyaan" => "Bagaimana pendapat saudara tentang kecepatan Waktu dalam memberikan pelayanan",
                "pilihan1" => "Tidak cepat",
                "pilihan2" => "Kurang Cepat",
                "pilihan3" => "Cepat",
                "pilihan4" => "Sangat Cepat"
            ],
            [
                "pertanyaan" => "Bagaimana Pendapat saudara tantang kewajiban biaya/tarif dalam pelayanan",
                "pilihan1" => "Sangat mahal",
                "pilihan2" => "Cukup mahal",
                "pilihan3" => "Murah",
                "pilihan4" => "Gratis"
            ],
            [
                "pertanyaan" => "Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan",
                "pilihan1" => "Tidak Sesuai",
                "pilihan2" => "Kurang Sesuai",
                "pilihan3" => "Sesuai",
                "pilihan4" => "Sangat Sesuai"
            ],
            [
                "pertanyaan" => "Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan",
                "pilihan1" => "Tidak kompeten",
                "pilihan2" => "Kurang kompeten",
                "pilihan3" => "Kompeten",
                "pilihan4" => "Sangat kompeten"
            ],
            [
                "pertanyaan" => "Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan",
                "pilihan1" => "Tidak sopan dan ramah",
                "pilihan2" => "Kurang sopan dan ramah",
                "pilihan3" => "Sopan dan ramah",
                "pilihan4" => "Sangat sopan dan ramah"
            ],
            [
                "pertanyaan" => "Bagaimana pendapat saudara tentang kualitas sarana dan prasarana",
                "pilihan1" => "Buruk",
                "pilihan2" => "Cukup",
                "pilihan3" => "Baik",
                "pilihan4" => "Sangat Baik"
            ],
            [
                "pertanyaan" => "Bagaimana Pendapat saudara tentang penanganan pengaduan pengguna layanan",
                "pilihan1" => "Tidak ada",
                "pilihan2" => "Ada tapi tidak berfungsi",
                "pilihan3" => "Berfungsi kurang maksimal",
                "pilihan4" => "Dikelola dengan baik"
            ],
        ];

        $kuisionerModel = new KuisionerModel();
        $kuisionerModel->insertBatch($data);
    }
}
