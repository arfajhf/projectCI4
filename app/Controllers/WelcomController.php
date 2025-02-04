<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class WelcomController extends BaseController
{
    // public function __construct()
    // {
    //     helper('url');
    // }

    public function index()
    {
        return view('index');
    }
}
