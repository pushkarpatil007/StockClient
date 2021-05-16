<?php

class Master_Subscription_Plans_Model extends CI_Model {

    public function register()
    {
        $this->first_name    = $_POST['first_name']; // please read the below note
        $this->last_name  = $_POST['last_name'];
        $this->email  = $_POST['email'];
        $this->mobile  = $_POST['mobile'];
        $this->password  = $_POST['password'];
        date_default_timezone_set("Asia/Kolkata");
        $this->registration_date     = date("Y-m-d H:i:s");

        $this->load->model('Misc');
        $this->email_verification_code = $this->Misc->randomString(8);

        //echo $this->registration_date;

        $this->db->insert('registrations', $this);

        $id = $this->db->insert_id();
        //echo '$id='.$id;

        return $id;
    }

    public function get($shortname)
    {
        $this->db->where('short_name', $shortname);
        $query = $this->db->get('mst_subscription_plans')->row();

        return $query;
    }

}
