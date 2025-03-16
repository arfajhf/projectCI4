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
        $data['categories'] = $documentModel->findAll();

        return view('admin/kategori/index', $data);
    }
}
