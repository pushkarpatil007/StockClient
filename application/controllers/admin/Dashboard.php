<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $this->load->view('admin/header');
        $this->load->view('admin/templates/dashboard');
        $this->load->view('admin/footer');
    }
    
}