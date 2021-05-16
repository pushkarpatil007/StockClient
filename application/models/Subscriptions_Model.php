<?php

class Subscriptions_Model extends CI_Model {

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
        return $this->db->get('subscriptions')->row();
    }

    public function read_all()
    {
        $this->db->order_by('id', 'asc');
        return $this->db->get('subscriptions')->result();
    }

    public function update($data, $id)
    {
        $this->db->set($data);
        $this->db->where("id", $id);
        $this->db->update("subscriptions", $data);
    }

    public function delete($id)
    {
        if($this->db->delete("subscriptions","id=".$id))
        {
            return true;
        }
    }
    //***** CRUD Functions End *****


    public function create_2()
    {
        $this->member_id    = $_POST['member_id']; // please read the below note
        $this->plan  = $_POST['plan'];
        $this->start_date  = $_POST['start_date'];
        $this->end_date  = $_POST['end_date'];
        $this->payment_id  = $_POST['payment_id'];
        $this->active  = 'Y';
        date_default_timezone_set("Asia/Kolkata");
        $this->updated_on     = date("Y-m-d H:i:s");

        $this->db->insert('subscriptions', $this);

        $id = $this->db->insert_id();
        //echo '$id='.$id;

        return $id;
    }

}
