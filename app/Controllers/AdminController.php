<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Controllers\BaseController;
use App\Models\IdentificationCardModel;
use CodeIgniter\Debug\Toolbar\Collectors\Views;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\ResponseInterface;
use PhpParser\Node\Expr\New_;

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

    // penduduk

    public function penduduk()
    {
        $identificationModel = new IdentificationCardModel();
        $data['identificationcards'] = $identificationModel->getAllIDCardsWithAdmins();
        // echo "<pre>";
        // print_r($identificationcards);
        // echo "</pre>";
        // exit;

        return view('admin/penduduk/index', $data);
    }

    public function viewPenduduk($id)
    {
        $identificationModel = new IdentificationCardModel();
        $data['user'] = $identificationModel->getIDCardWithAdmin($id);

        // echo "<pre>";
        // print_r($data['user']);
        // echo "</pre>";
        // exit;

        return view('/admin/penduduk/view', $data);
    }


    // end penduduk

    public function create()
    {
        return view('admin/user/createFo');
    }

    public function storeFo()
    {
        helper(['form']);

        $validate = [
            'nama'     => 'required|min_length[3]|max_length[50]',
            'email'    => 'required|valid_email|is_unique[admins.email]',
            'password' => 'required|min_length[8]',
            'no_hp'    => 'required|min_length[11]'
        ];

        if (!$this->validate($validate)) {
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }

        $user = new AdminModel();

        $data = [
            'name' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'phone' => $this->request->getPost('no_hp'),
            'role' => 'front_office'
        ];

        $user->insert($data);

        return redirect()->to('/admin')->with('success', 'Data Berhasil Ditambahkan');
    }

    // penduduk create
    // public function createP(){

    // }

    public function View($id)
    {
        $user = new AdminModel();
        $user->find($id);

        return view('admin/user/view', compact('user'));
    }

    public function deleteFo($id)
    {
        $user = new AdminModel();

        // $find = $user->find($id);

        // if ($find) {
        $user->delete($id);
        return redirect()->to('/admin')->with('success', 'Data Berhasil Dihapus');
        // }
    }
}
