<?php

namespace App\Models;

use CodeIgniter\Model;


class MenuModel extends Model
{
    protected $table = 'menu';

    public function getMenu($group_id)
    {
        // DOCUMENTASI CI4 PADA BUILDER QUERY CLASS
        return $this->db->table($this->table)
            ->where(['group_id' => $group_id, 'active' => 'Y'])
            ->orderBy('parent_id ASC', 'position ASC')
            ->get()->getResultArray();
    }

    public function getSubMenu($id)
    {
        // DOCUMENTASI CI4 PADA MODELLING DATA
        return $this->where('parent_id', $id)->findAll();
        // return $this->db->table($this->table)->where('parent_id', $id)->get()->getResult();
    }
}
