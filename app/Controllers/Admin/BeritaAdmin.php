<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\MenuModel;

class BeritaAdmin extends BaseController
{
	protected $menu;

	public function __construct()
	{
		$this->menu = new MenuModel();
	}

	public function index()
	{
		if (session()->get('login') == null) {
			return redirect()->to(route_to('index-login'));
		}
		$data = [
			'judul' => 'Silahkan Login',
			'menu' => $this->menu->getMenu(session()->get('iduser'))
		];
		return view('admin/berita/index', $data);
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
			'menu' => $this->menu->getMenu(session()->get('iduser'))
		];
		return view('admin/berita/create', $data);
	}

	//--------------------------------------------------------------------

}
