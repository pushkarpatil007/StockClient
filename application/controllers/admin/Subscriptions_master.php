<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscriptions_master extends CI_Controller {

    public function index() {
        $this->load->view('admin/header');
        $this->load->view('admin/templates/member_list');
        $this->load->view('admin/footer');
    }

    public function add() {

    }

    public function list() {

        $this->load->view('admin/header');

        $this->load->model('Subscriptions_Model');
        $data['subscriptions'] = $this->Subscriptions_Model->read_all();

        $this->load->view('admin/subscriptions/list', $data);

        $this->load->view('admin/footer');

    }

    public function update() {

    }

    public function delete() {

    }
    
}