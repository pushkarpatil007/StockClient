<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members_master extends CI_Controller {

    public function add() {

    }

    public function list() {

        $this->load->view('admin/header');

        $this->load->model('Members_Model');
        $data['members'] = $this->Members_Model->read_all();

        $this->load->view('admin/members/list', $data);

        $this->load->view('admin/footer');

    }

    public function edit($id) {

        $this->load->view('admin/header');

        $this->load->library('form_validation');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->model('Members_Model');
            $data['member'] = $this->Members_Model->read($id);
    
            $this->load->view('admin/members/edit', $data);
        }

        $this->load->view('admin/footer');

    }

    

    public function delete() {

    }
    
}