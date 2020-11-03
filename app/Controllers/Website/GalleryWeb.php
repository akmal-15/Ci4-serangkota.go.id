<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;
use App\Models\GalleryModel;

class GalleryWeb extends BaseController
{

    protected $gallery;

    public function __construct()
    {
        $this->gallery = new GalleryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pemerintah Kota Serang',
            'hero' => false,
            'judul' => 'Gallery Foto',
            'album' => $this->gallery->getThumbnail()
        ];
        return view('website/gallery/index', $data);
    }
    public function details($id)
    {
        $data = [
            'title' => 'Pemerintah Kota Serang',
            'hero' => false,
            'judul' => 'Gallery Foto',
            'album' => $this->gallery->getGalleryBySeo($id)
        ];
        return view('website/gallery/gallery-details', $data);
    }

    //--------------------------------------------------------------------

}
