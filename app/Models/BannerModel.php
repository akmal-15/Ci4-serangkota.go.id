<?php

namespace App\Models;

use CodeIgniter\Model;


class BannerModel extends Model
{
    protected $table = 'banner';
    protected $allowedFields = ['gambar', 'keterangan'];

    public function getBanner($id = 0)
    {
        if ($id != 0) {
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function getCountBanner()
    {
        return $this->countAllResults();
    }

    public function saveBanner($gambar, $keterangan)
    {
        return $this->save($data = [
            'gambar' => $gambar,
            'keterangan' => $keterangan
        ]);
    }

    public function updateBanner($id, $gambar, $caption)
    {
        return $this->where('id', $id)
            ->set([
                'gambar' => $gambar,
                'keterangan' => $caption
            ])
            ->update();
    }
}
