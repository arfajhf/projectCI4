<?php

namespace App\Controllers;

use App\Models\HasilModel;

class Home extends BaseController
{
    public function index(): string
    {
        $hasilModel = new HasilModel();
        $clusterData = $hasilModel->select('cluster, COUNT(*) as jumlah')
            ->groupBy('cluster')
            ->findAll();

        return view('dashboard', ['clusterData' => $clusterData]);
    }
}
