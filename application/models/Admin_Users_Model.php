<?php

class Admin_Users_Model extends CI_Model {

    public function authenticate($username, $password)
    {
        $flag = false;

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin_users');

        if($query->num_rows() > 0)
        {
            $flag = true;
        }

        return $flag;
    }

}