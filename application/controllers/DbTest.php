<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DbTest extends CI_Controller {

    public function index() {
        $dsn = 'mysqli://root:root@localhost:3306/stockview';
        $this->load->database($dsn);
    }
}
