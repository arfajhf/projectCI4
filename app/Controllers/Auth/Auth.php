<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AdminModel;
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
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
