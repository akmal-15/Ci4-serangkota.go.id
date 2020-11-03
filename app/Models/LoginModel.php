<?php

namespace App\Models;

use CodeIgniter\Model;


class LoginModel extends Model
{
    protected $table   = 'users';

    public function getUser($username, $password, $mode = false)
    {
        if ($mode == true) {
            // DOCUMENTASI CI4 PADA QUERY BUILDER
            return $this->db->table($this->table)
                ->join('user_level', 'user_level.id_level = users.level', 'left')
                ->where(['users.username' => $username, 'users.password' => md5($password), 'users.block' => 'N'])
                ->get()->getRowArray();
        }
        // DOCUMENTASI CI4 PADA MODELLING DATA
        return $this->where(['username' => $username, 'password' => $password, 'block' => 'N'])->first();
    }
}
