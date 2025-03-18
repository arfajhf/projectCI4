<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DocumentCategorieModel;
use CodeIgniter\HTTP\ResponseInterface;

class KategoriController extends BaseController
{
    public function index()
    {
        $documentModel = new DocumentCategorieModel();
        $data['documents'] = $documentModel->findAll();

        return view('admin/kategori/index', $data);
    }

    public function create()
    {
        return view('admin/kategori/create');
    }

    public function store()
    {
        $documentModel = new DocumentCategorieModel();

        // Validasi input
        $rules = [
            'name' => 'required',
            'category' => 'required',
            'requirements' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Semua field harus diisi!');
        }

        // Ambil data dari request
        $name = $this->request->getPost('name');
        $category = $this->request->getPost('category');
        $requirements = $this->request->getPost('requirements');

        // Konversi ke array dan simpan sebagai JSON
        $requirementsArray = explode(',', $requirements);
        $requirementsJson = json_encode($requirementsArray);

            // dd([
            //     'name' => $name,
            //     'category' => $category,
            //     'requirements' => $requirementsJson
            // ]);

        // Simpan ke database
        $documentModel->insert([
            'name' => $name,
            'category' => $category,
            'requirements' => $requirementsJson // Simpan sebagai JSON
        ]);

        return redirect()->to('/kategori')->with('success', 'Kategori Berhasil Ditambahkan');
    }
}
