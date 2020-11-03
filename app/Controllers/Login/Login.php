<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Login extends BaseController
{
    protected $login;
    protected $session;

    public function __construct()
    {
        $this->login = new LoginModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/login/index', $data);
    }

    public function in()
    {
        if (!$this->validate([
            'user' => [
                'rules' => 'max_length[50]|min_length[3]',
                'errors' => [
                    'max_length' => 'max 50 karakter',
                    'min_length' => 'min 3 karakter'
                ]
            ],
            'pass' => [
                'rules' => 'max_length[50]|min_length[3]',
                'errors' => [
                    'max_length' => 'max 50 karakter',
                    'min_length' => 'min 3 karakter'
                ]
            ]
        ])) {
            return redirect()->back();
        }

        $result = $this->login->getUser($this->request->getVar('user'), $this->request->getVar('pass'), true);
        if (!isset($result)) {
            session()->setFlashdata('message', true);
            return redirect()->back()->withInput();
        }
        session()->set('iduser', $result['id_user']);
        session()->set('login', 1);
        return redirect()->to(route_to('index-gallery'));
        // return redirect()->to('/admin/gallery');
    }

    //--------------------------------------------------------------------

}
