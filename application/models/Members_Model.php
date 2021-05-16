<?php

class Members_Model extends CI_Model {

    //***** CRUD Functions Start *****
    public function create($data)
    {
        if($this->db->insert($data))
        {
            return true;
        }
    }

    public function read($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('members')->row();
    }

    public function read_all()
    {
        //$this->db->order_by('id');
        return $this->db->get('members')->result();
    }

    public function update($data, $id)
    {
        $this->db->set($data);
        $this->db->where("id", $id);
        $this->db->update("members", $data);
    }

    public function delete($id)
    {
        if($this->db->delete("members","id=".$id))
        {
            return true;
        }
    }
    //***** CRUD Functions End *****


    //Move registered member from registrations table to members table
    public function add_member($registration_id)
    {
        $this->load->model('Registrations_Model');
        $registration = $this->Registrations_Model->get($registration_id);

        $this->registration_id  = $registration->id;
        $this->first_name    = $registration->first_name;
        $this->last_name  = $registration->last_name;
        $this->email  = $registration->email;
        $this->mobile  = $registration->mobile;
        $this->password  = $registration->password;
        $this->active  = 'Y';
        $this->email_verified  = 'Y';
        $this->email_verified_time  = date("Y-m-d H:i:s");
        $this->registration_date     = $registration->registration_date;
        $this->updated_on     = date("Y-m-d H:i:s");

        $this->db->insert('members', $this);
    }

    //Return True if a email exists
    public function is_exist($email)
    {
        $flag = false;

        $this->db->where('email', $email);
        $query = $this->db->get('members');
        if($query->num_rows() > 0)
        {
            $flag = true;
        }

        return $flag;
    }

    public function authenticate($email, $password)
    {
        $flag = false;

        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('members');

        if($query->num_rows() > 0)
        {
            $flag = true;
        }

        return $flag;
    }

}
