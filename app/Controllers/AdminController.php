<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Controllers\BaseController;
use App\Models\IdentificationCardModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        $query = $this->request->getGet('query');
        if ($query) {
            $adminModel = new AdminModel();
            $data = $adminModel->where('name', 'like', '%' . $query . '%')->orWhere('role !=', 'penduduk')->findAll();
        } else {
            $adminModel = new AdminModel();
            $data = $adminModel->where('role !=', 'penduduk')->findAll();
        }


        return view('admin/user/index', compact('data'));
    }

    public function penduduk()
    {
        $query = $this->request->getGet('query');
        // $adminModel = new AdminModel();
        // if ($query) {
        //     $data = $adminModel->where('name', 'like', '%' . $query . '%')->where('role', 'penduduk')->findAll();
        // } else {
        //     // $adminModel = new AdminModel();
        //     $data = $adminModel->where('role', 'penduduk')->findAll();
        // }

        $identification = new IdentificationCardModel();
        if ($query) {
            $data = $identification->where('indentity_number', 'like', '%' . $query . '%')->getAdmin();
        } else {
            // $adminModel = new AdminModel();
            $data = $identification->getAdmin();
        }


        return view('admin/penduduk/index', compact('data'));
    }
}
