<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use App\Models\MenuModel;

class GalleryAdmin extends BaseController
{
    protected $menu;

    public function __construct()
    {
        $this->menu = new MenuModel();
        $this->gallery = new GalleryModel();
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
            'gallery' => $this->gallery->getGallery()
        ];

        return view('admin/gallery/index', $data);
    }

    public function create()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        $data = [
            'judul' => 'Silahkan Login',
            // $_SESSION['menuuser']
            // $_SESSION['iduser']
            'menu' => $this->menu->getMenu(session()->get('iduser')),
            'validation' => \Config\Services::validation(),
            'album' => $this->gallery->getAlbum()
        ];
        return view('admin/gallery/create', $data);
    }

    public function save()
    {
        // Validasi Input 
        // READ DOC CI4 CONTROLLERS
        if (!$this->validate([
            'caption' => [
                'rules' => 'required|is_unique[gallery.title]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
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
        $file_gambar->move('img/gallery', $nama_gambar);
        // GET NEW NAME FILE
        $nama_gambar = $file_gambar->getName();

        // GET DATA FROM FORM
        $caption = $this->request->getVar('caption');
        $album = $this->request->getVar('album');

        // INSERTA DATA KE DALAM DATABASE DARI GALLERYMODEL
        $save = $this->gallery->saveGallery($caption, $album, $nama_gambar);

        //  SET PESAN NOTIFIKASI
        $flash = ($save) ? true : false;

        // SET SESSION FLASH DATA
        session()->setFlashdata('save', $flash);

        return redirect()->to('/admin/gallery/create');
    }

    public function update($id)
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        $data = [
            'menu' => $this->menu->getMenu(session()->get('iduser')),
            'data' => $this->gallery->getGallerybyId($id),
            'album' => $this->gallery->getAlbum(),
            'validation' => \Config\Services::validation()
        ];
        return view('admin/gallery/update', $data);
    }

    public function updatePost()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        // Validasi Input 
        // READ DOC CI4 CONTROLLERS
        if (!$this->validate([
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'ukuran gambar terlalu besar(1024kb)',
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
            $gambar->move('img/gallery', $nama_gambar);
            unlink('img/gallery/' . $this->request->getVar('gambar-lama'));
        }

        // GET DATA FROM FORM
        $caption = $this->request->getVar('caption');
        $id = $this->request->getVar('id');
        $album = $this->request->getVar('album');

        // INSERTA DATA KE DALAM DATABASE DARI GALLERYMODEL
        $update = $this->gallery->updateGallery($id, $album, $caption, $nama_gambar);

        //  SET PESAN NOTIFIKASI
        $flash = ($update) ? true : false;

        // SET SESSION FLASH DATA
        session()->setFlashdata('message-update', $flash);

        return redirect()->to('/admin/gallery');
    }

    public function delete()
    {
        if (session()->get('login') == null) {
            return redirect()->to(route_to('index-login'));
        }
        // VALIDATION
        if (empty($this->request->getVar()) || $this->request->getVar('_method') != 'DELETE') {
            return redirect()->to('/admin/gallery');
        }

        // RUN QUERY DELETE BY ID
        // READ DOC CI4 MODELING DATA
        $result = $this->gallery->delete($this->request->getVar('id'));

        // DELETE IMG FROM PUBLIC/IMG/UPLOAD
        unlink("img/gallery/" . $this->request->getVar('gambar'));

        //  SET PESAN NOTIFIKASI
        $flash = ($result) ? true : false;

        // SET SESSION FLASH DATA
        session()->setFlashdata('message', $flash);

        return redirect()->to('/admin/gallery');
    }

    public function addAlbum()
    {
        // Validasi Input 
        // READ DOC CI4 CONTROLLERS
        if (!$this->validate([
            'album' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'album harus diisi'
                ]
            ]
        ])) {
            return redirect()->back();
        }
        // READ DOC CI4 URL HELPER
        $seo = url_title($this->request->getVar('album'), '-');

        // RESULT QUERY
        $result = $this->gallery->addAlbum($this->request->getVar('album'), $seo);

        //  SET PESAN NOTIFIKASI
        $flash = ($result) ? true : false;

        // SET SESSION FLASH DATA
        session()->setFlashdata('message', $flash);

        return redirect()->back();
    }
    //--------------------------------------------------------------------

}
