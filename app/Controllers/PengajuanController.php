<?php

namespace App\Controllers;

use App\Controllers\Auth\Auth;
use App\Models\SubmissionModel;
use App\Controllers\BaseController;
use App\Models\DocumentCategorieModel;
use CodeIgniter\HTTP\ResponseInterface;

class PengajuanController extends BaseController
{
    public function index()
    {
        $submissionModel = new SubmissionModel();
        $uri = service('uri');
        $lastSegment = $uri->getSegment($uri->getTotalSegments());
        $adminId = session()->get('admin_id');
        $role = session()->get('role');

        // Default nilai $pengajuan sebagai array kosong untuk menghindari error
        $pengajuan = [];

        if ($role == 'front_office') {
            $pengajuan = $submissionModel->getWithDocuments()
                ->where('submissions.status', $lastSegment) // Pakai prefix tabel
                ->findAll();
        } elseif ($role == 'penduduk') {
            $pengajuan = $submissionModel->getWithDocuments()
                ->where('submissions.status', $lastSegment) // Pakai prefix tabel
                ->where('submissions.admin_id', $adminId) // Pakai prefix tabel
                ->findAll();
        }

        $data['pengajuan'] = $pengajuan;

        return view('penduduk/pengajuan/index', $data);
    }

    public function create()
    {
        $documentModel = new DocumentCategorieModel();
        $documents = $documentModel->findAll();

        return view('penduduk/pengajuan/create', ['documents' => $documents]);
    }

    public function getRequirements()
    {
        $documentModel = new DocumentCategorieModel();
        $documentId = $this->request->getPost('document_id');
        $document = $documentModel->find($documentId);

        if ($document) {
            $requirements = json_decode($document['requirements'], true);
            return $this->response->setJSON($requirements);
        }

        return $this->response->setJSON([]);
    }

    public function store()
    {
        $submissionModel = new SubmissionModel();

        // Validasi input
        $rules = [
            'document_id' => 'required|integer',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $admin = session()->get('admin_id');
        $today = date('Y-m-d');

        $queueNumber = $submissionModel
            ->where('created_at >=', $today . ' 00:00:00')
            ->where('created_at <=', $today . ' 23:59:59')
            ->countAllResults() + 1;

        // Simpan data
        $submissionModel->insert([
            'admin_id'    => $admin,
            'document_id' => $this->request->getPost('document_id'),
            'status'      => 'process',
            'queue'       => 'BD' . $queueNumber,
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/penduduk/pengajuan/process')->with('success', 'Submission Berhasil Ditambahkan');
    }

    public function view($id)
    {
        $submissionModel = new SubmissionModel();

        $pengajuan = $submissionModel->getWithDocuments()->where('submissions.id', $id)->first();

        if (!$pengajuan) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $pengajuan['requirements'] = json_decode($pengajuan['requirements'], true);

        $data['pengajuan'] = $pengajuan;

        return view('penduduk/pengajuan/view', $data);
    }

    public function update($id)
    {
        $submissionModel = new SubmissionModel();
        $pengajuan = $submissionModel->find($id);

        if (!$pengajuan) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        if ($pengajuan['status'] == 'process') {
            $submissionModel->update($id, ['status' => 'accepte']);
            return redirect()->to('penduduk/pengajuan/accepte')->with('success', 'Data berhasil diubah');
        } elseif ($pengajuan['status'] == 'accepte') {
            $submissionModel->update($id, ['status' => 'completed']);
            return redirect()->to('penduduk/pengajuan/completed')->with('success', 'Data berhasil diubah');
        }
    }
}
