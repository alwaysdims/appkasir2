<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_user_by_username($username) {
        // Query untuk mendapatkan data user berdasarkan username
        $this->db->where('username', $username);
        $query = $this->db->get('user');
        return $query->row(); // Mengembalikan 1 baris data
    }
}
