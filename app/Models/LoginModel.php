<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    public function cek_login($email, $password)
    {
        return $this->db->table('user')
            ->where(array('user_email' => $email, 'user_password' => $password))
            ->get()->getRowArray();
    }
}
