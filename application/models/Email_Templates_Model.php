<?php

class Email_Templates_Model extends CI_Model {

    public function get($template_name)
    {
        $this->db->where('name', $template_name);
        $result = $this->db->get('email_templates')->row();

        return $result;
    }
    
}
