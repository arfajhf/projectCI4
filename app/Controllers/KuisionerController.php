<?php

namespace App\Controllers;

use App\Models\HasilModel;
use App\Models\JawabanModel;
use App\Models\KuisionerModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KuisionerController extends BaseController
{
    public function index()
    {
        $kuisionerModel = new KuisionerModel();
        $data['data1'] = $kuisionerModel->where('id <=',  5)->findAll();
        $data['data2'] = $kuisionerModel->where('id >',  5)->findAll();

        // dd($data['data1']);
        // dd($data['data2']);

        return view('/kuisioner/index', $data);
    }

    public function store()
    {
        $requestData = $this->request->getPost();
        // dd($requestData); // Cek semua data yang dikirim dari form
        $hasilModel = new HasilModel();
        $jawabanModel = new JawabanModel();
        $jawabanData = [
            'layanan' => $this->request->getPost('layanan'),
            'usia' => $this->request->getPost('usia'),
            'jenis_kelamin' => $this->request->getPost('jeniskelamin'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'jawaban1' => $this->request->getPost('jawaban[1]'),
            'jawaban2' => $this->request->getPost('jawaban[2]'),
            'jawaban3' => $this->request->getPost('jawaban[3]'),
            'jawaban4' => $this->request->getPost('jawaban[4]'),
            'jawaban5' => $this->request->getPost('jawaban[5]'),
            'jawaban6' => $this->request->getPost('jawaban[6]'),
            'jawaban7' => $this->request->getPost('jawaban[7]'),
            'jawaban8' => $this->request->getPost('jawaban[8]'),
            'jawaban9' => $this->request->getPost('jawaban[9]'),
        ];
        $data = $jawabanModel->save($jawabanData);

        $jawabanId = $jawabanModel->insertID(); // Ambil ID terakhir yang disimpan

        // Data untuk clustering (jawaban 1-9)
        $dataKmeans = [
            $jawabanData['jawaban1'],
            $jawabanData['jawaban2'],
            $jawabanData['jawaban3'],
            $jawabanData['jawaban4'],
            $jawabanData['jawaban5'],
            $jawabanData['jawaban6'],
            $jawabanData['jawaban7'],
            $jawabanData['jawaban8'],
            $jawabanData['jawaban9']
        ];

        // Tentukan cluster
        $cluster = $this->kmeansCluster($dataKmeans);

        // Simpan hasil clustering
        $hasilModel->save([
            'jawaban_id' => $jawabanId,
            'cluster' => $cluster
        ]);


        return redirect()->to('/kuisioner')->with('success', 'Berhasil mengirimkan kuisioner');
    }


    private function kmeansCluster($data)
    {
        // Tentukan centroid awal (misal 3 cluster)
        $centroids = [
            [1, 1, 1, 1, 1, 1, 1, 1, 1], // Cluster 1
            [2, 2, 2, 2, 2, 2, 2, 2, 2], // Cluster 2
            [3, 3, 3, 3, 3, 3, 3, 3, 3], // Cluster 3
            [4, 4, 4, 4, 4, 4, 4, 4, 4]  // Cluster 4
        ];

        $minDistance = null;
        $assignedCluster = null;

        foreach ($centroids as $index => $centroid) {
            $distance = $this->euclideanDistance($data, $centroid);

            if ($minDistance === null || $distance < $minDistance) {
                $minDistance = $distance;
                $assignedCluster = $index + 1; // Cluster dimulai dari 1
            }
        }

        return $assignedCluster;
    }

    private function euclideanDistance($data, $centroid)
    {
        $sum = 0;
        for ($i = 0; $i < count($data); $i++) {
            $sum += pow($data[$i] - $centroid[$i], 2);
        }
        return sqrt($sum);
    }
}
