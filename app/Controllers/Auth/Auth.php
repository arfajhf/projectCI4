<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\IdentificationCardModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{

    public function index()
    {
        return view('auth/index');
    }
    public function login()
    {
        // Cek apakah request method POST
        if ($this->request->getMethod() == 'POST') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $userModel = new AdminModel();
            $user = $userModel->where('email', $email)->first();

            if ($user && password_verify($password, $user['password'])) {
                session()->set([
                    'admin_id'   => $user['id'],
                    'role'       => $user['role'],
                    'admin_name' => $user['name'],
                    'isLoggedIn' => true,
                ]);

                // dd(session()->get());

                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid credentials');
            }
        } else {
            return redirect()->to('/login');  // Jika bukan POST, redirect ke halaman login
        }
    }

    // regis
    public function register(){
        return view('admin/penduduk/create');
    }

    public function store(){
        $user = new AdminModel();
        $penduduk = new IdentificationCardModel();

        $dataUser = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'role' => 'penduduk',
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        ];

        $user->insert($dataUser);
        $akunID = $user->insertID(); // Dapatkan ID akun yang baru

        // Simpan data user ke tabel `users`
        $userData = [
            'admin_id' => $akunID,
            'identity_number' => $this->request->getPost('nik'),
            'place_of_birth' => $this->request->getPost('tempatlahir'),
            'date_of_birth' => $this->request->getPost('tanggallahir'),
            'religion' => $this->request->getPost('agama'),
            'marital_status' => $this->request->getPost('nikah'),
            'job' => $this->request->getPost('pekerjaan'),
            'nationality' => $this->request->getPost('kewarganegaraan'),
            'blood_type' => $this->request->getPost('goldar'),
            'addres' => $this->request->getPost('alamat'),
        ];
        $penduduk->insert($userData);

        return redirect()->to('/login')->with('success', 'Berhasil Menambahkan Akun');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
