<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\RunningModel;

class RunningAdmin extends BaseController
{
    protected $menu;
    protected $run;

    public function __construct()
    {
        $this->menu = new MenuModel();
        $this->run = new RunningModel();
    }

    public function index()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        $data = [
            'judul' => 'Silahkan Login',
            // $_SESSION['menuuser']
            // $_SESSION['iduser']
            'menu' => $this->menu->getMenu(session()->get('iduser')),
            'running' => $this->run->getText()
        ];
        return view('admin/running/index', $data);
    }

    public function update()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        // DATA LAMA
        //Pemerintah Kota Serang beserta seluruh Aparatur Sipil Negara mengucapkan Selamat Hari Raya Idul Fitri 1440H bagi umat muslim yang merayakannya. taqabbalallahu minna waminkum shiyamanna washiyamakum , semoga amalanku dan amalanmu, puasaku dan  puasa ramadhan

        // GET FATA FORM
        $isi = $this->request->getVar('text');

        // UPDATE DATA
        $result = $this->run->updateText($isi);

        //  SET PESAN NOTIFIKASI
        $flash = ($result) ? true : false;

        // SET SESSION FLASH DATA
        session()->setFlashdata('message', $flash);

        return redirect()->back();
    }

    //--------------------------------------------------------------------

}
