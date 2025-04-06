<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\HasilModel;
use App\Models\IdentificationCardModel;
use App\Models\SubmissionModel;

class Home extends BaseController
{
    public function index(): string
    {
        $hasilModel = new HasilModel();
        $clusterData = $hasilModel->select('cluster, COUNT(*) as jumlah')
            ->groupBy('cluster')
            ->findAll();

        $identificationModel = new IdentificationCardModel();
        $identificationData = $identificationModel->countAll();

        $adminModel = new AdminModel();
        $adminData = $adminModel->where('role', 'front_office')->countAllResults();

        $submissionModel = new SubmissionModel();
        $submissionData = $submissionModel->countAll();

        // FO
        $submission['process'] = $submissionModel->where('status', 'process')->countAllResults();
        $submission['completed'] = $submissionModel->where('status', 'completed')->countAllResults();
        $submission['procesid'] = $submissionModel->where('status', 'process')->where('id', session()->get('id'))->countAllResults();
        $submission['completedid'] = $submissionModel->where('status', 'completed')->where('id', session()->get('id'))->countAllResults();

        return view('dashboard', array_merge(
            compact(
                'clusterData',
                'identificationData',
                'adminData',
                'submissionData'
            ),
            $submission
        ));
    }
}
