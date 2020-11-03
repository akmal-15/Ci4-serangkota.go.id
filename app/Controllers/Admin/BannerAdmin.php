<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\BannerModel;

class BannerAdmin extends BaseController
{
    protected $menu;
    protected $banner;
    protected $session;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->menu = new MenuModel();
        $this->banner = new BannerModel();
    }

    public function index()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        $data = [
            'judul' => 'Silahkan Login',
            'menu' => $this->menu->getMenu(session()->get('iduser')),
            'count' => $this->banner->getCountBanner(),
            'banner' => $this->banner->getBanner(),
            'validation' => \Config\Services::validation(),
        ];
        // dd($data);
        return view('admin/banner/index', $data);
    }

    public function create()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        $count = $this->banner->getCountBanner();
        if (!($count >= 0 && $count < 5)) {
            return redirect()->to('/admin/banner-website');
        }
        $data = [
            'title' => 'Banner Admin',
            'menu' => $this->menu->getMenu(session()->get('iduser')),
            'validation' => \Config\Services::validation(),
        ];
        return view('admin/banner/create', $data);
    }

    public function save()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        if (!($_POST)) {
            return redirect()->to('/admin/banner-website/create');
        }

        // Validasi Input 
        // READ DOC CI4 CONTROLLERS
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'gambar harus diisi',
                    'max_size' => 'ukuran gambar terlalu besar(2048kb)',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }
        // GET FILE
        $file_gambar = $this->request->getFile('gambar');
        // GENERATE NAME FILE
        $nama_gambar = $file_gambar->getRandomName();
        // MOVE FILE
        $file_gambar->move('img/banner', $nama_gambar);
        // GET NEW NAME FILE
        $nama_gambar = $file_gambar->getName();

        // GET DATA FROM FORM
        $caption = $this->request->getVar('caption');

        // INSERTA DATA KE DALAM DATABASE DARI GALLERYMODEL
        $save = $this->banner->saveBanner($nama_gambar, $caption);

        //  SET PESAN NOTIFIKASI
        $flash = ($save) ? true : false;

        // SET SESSION FLASH DATA
        session()->setFlashdata('save', $flash);

        return redirect()->to('/admin/banner-website/create');
    }

    public function update($id)
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        $data = [
            'title' => 'Banner Admin',
            'menu' => $this->menu->getMenu(session()->get('iduser')),
            'data' => $this->banner->getBanner($id),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/banner/update', $data);
    }

    public function updatePost()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        if (!($_POST)) {
            return redirect()->to('/admin/banner-website/create');
        }

        // Validasi Input 
        // READ DOC CI4 CONTROLLERS
        if (!$this->validate([
            'gambar' => [
                'rules' => 'max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar(2048kb)',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }
        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $nama_gambar = $this->request->getVar('gambar-lama');
        } else {
            $nama_gambar = $gambar->getRandomName();
            $gambar->move('img/banner', $nama_gambar);
            unlink('img/banner/' . $this->request->getVar('gambar-lama'));
        }

        // GET DATA FROM FORM
        $caption = $this->request->getVar('caption');
        $id = $this->request->getVar('id');

        // INSERTA DATA KE DALAM DATABASE DARI GALLERYMODEL
        $update = $this->banner->updateBanner($id, $nama_gambar, $caption);

        //  SET PESAN NOTIFIKASI
        $flash = ($update) ? true : false;

        // SET SESSION FLASH DATA
        session()->setFlashdata('message-update', $flash);

        return redirect()->to('/admin/banner-website');
    }

    public function delete()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        // VALIDATION
        if (empty($this->request->getVar()) || $this->request->getVar('_method') !== 'DELETE') {
            return redirect()->to('/admin/banner-website');
        }

        // RUN QUERY DELETE BY ID
        // READ DOC CI4 MODELING DATA
        $result = $this->banner->delete($this->request->getVar('id'));

        // DELETE IMG FROM PUBLIC/IMG/UPLOAD
        unlink("img/banner/" . $this->request->getVar('gambar'));

        //  SET PESAN NOTIFIKASI
        $flash = ($result) ? true : false;

        // SET SESSION FLASH DATA
        session()->setFlashdata('message', $flash);

        return redirect()->to('/admin/banner-website');
    }
    //--------------------------------------------------------------------

}
