<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function check_login($email, $password)
    {
        return $this->db->get_where('users', [
            'email' => $email,
            'password' => ($password) // contoh MD5
        ])->row();
    }
}
