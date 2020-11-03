<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use App\Models\BannerModel;
use App\Models\RunningModel;

class Home extends BaseController
{
    protected $gallery;
    protected $banner;
    protected $running;

    public function __construct()
    {
        $this->gallery = new GalleryModel();
        $this->banner = new BannerModel();
        $this->running = new RunningModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pemerintah Kota Serang',
            'hero' => true,
            'banner' => $this->banner->getBanner(),
            'judul' => 'Gallery Foto',
            'running' => $this->running->getText(),
            'count' => $this->banner->getCountBanner(),
            'album' => $this->gallery->getThumbnail()
        ];
        // dd($data);
        return view('website/index', $data);
    }

    //--------------------------------------------------------------------

}
