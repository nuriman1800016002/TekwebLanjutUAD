<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\User;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function index()
    {
        echo view('user_login');
    }

    public function cek_login()
    {
        return redirect()->to(base_url('user'));
    }

    public function logout()
    {
        return redirect()->to(base_url('login'));
    }
}
