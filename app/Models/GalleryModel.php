<?php

namespace App\Models;

use CodeIgniter\Model;


class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id_gallery';
    protected $allowedFields = ['id_album', 'title', 'picture', 'content'];

    public function getGallery()
    {
        // DOCUMENTASI CI4 PADA BUILDER QUERY CLASS
        return $this->table($this->table)
            ->select('gallery.id_gallery, gallery.id_album, gallery.title, gallery.picture, album.title as album_title')
            ->join('album', 'album.id_album = gallery.id_album')
            ->orderBy('id_gallery DESC')
            ->get()->getResultArray();
    }

    public function getGalleryBySeo($seo)
    {
        // DOCUMENTASI CI4 PADA BUILDER QUERY CLASS
        return $this->table($this->table)
            ->select('gallery.id_gallery, gallery.id_album, gallery.title, gallery.picture, album.title as album_title')
            ->join('album', 'album.id_album = gallery.id_album')
            ->where('seotitle', $seo)
            ->orderBy('id_gallery DESC')
            ->get()->getResultArray();
    }

    public function getAlbum()
    {
        return $this->db->table('album')->get()->getResultArray();
    }

    public function saveGallery($caption, $id_album, $gambar)
    {
        return $this->save($data = [
            'title' => $caption,
            'id_album' => $id_album,
            'content' => '', // bingung di Database nya Kosong
            'picture' => $gambar
        ]);
    }

    public function getGallerybyId($id)
    {
        // READ DOC CI4 MODELING DATA
        return $this->find($id);
    }

    public function updateGallery($id, $album, $caption, $picture)
    {
        return $this->where('id_gallery', $id)
            ->set([
                'id_album' => $album,
                'title' => $caption,
                'picture' => $picture
            ])
            ->update();
    }

    public function addAlbum($title, $seo)
    {
        $data = [
            'title' => $title,
            'seotitle' => $seo,
            'active' => 'Y'
        ];
        return $this->db->table('album')->insert($data);
    }

    public function getThumbnail()
    {
        foreach ($this->getAlbum() as $row) {
            $data = $this->table($this->table)
                ->select('gallery.id_gallery, gallery.id_album, gallery.title, gallery.picture, album.title as album_title, album.seotitle as seo')
                ->join('album', 'album.id_album = gallery.id_album')
                ->where('gallery.id_album', $row['id_album'])
                ->orderBy('id_gallery DESC')
                ->get()->getRowArray(0);
            if ($data) {
                $array[] = $data;
            }
        }
        return $array;
    }
}
