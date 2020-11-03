<?php

namespace App\Models;

use CodeIgniter\Model;


class RunningModel extends Model
{
    protected $table = 'runningtext';
    protected $allowedFields = ['isitext'];

    public function getText()
    {
        return $this->find();
    }
    public function updateText($isi)
    {
        return $this->db->table($this->table)->update(['isitext' => $isi]);
    }
}
