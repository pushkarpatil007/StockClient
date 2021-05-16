<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pricing extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('templates/pricing');
        $this->load->view('footer');
	}
}
