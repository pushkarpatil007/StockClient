<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('templates/members');
        $this->load->view('footer');
    }

    public function show($id)
    {
        $memberModel = model('App\Models\MemberModel');

        $member = $memberModel->find($id);

        // Display
        echo $member->mobile;
        echo $member->email;

    }

    public function profile()
    {
        if(empty($_SESSION['email'])) redirect(base_url().'auth/login');

        if(!empty($_SESSION['email'])) $id = $_SESSION['email'];

        $this->load->view('header');

        $this->load->model('Members_Model');
        $data['member'] = $this->Members_Model->read($id);

        $this->load->view('templates/profile', $data);

        $this->load->view('footer');
    }

    public function research($report_name)
    {
        //if(empty($_SESSION['email'])) redirect(base_url().'auth/login');
        
        $this->load->view('header');

        if($report_name=="report-equity-buzz") {
            $this->load->view('reports/report_EquityBuzz');
        }else if($report_name=="report-momentum-stocks") {
            $this->load->view('reports/report_MomentumStocks');
        }else if($report_name=="report-multibagger-large-cap") {
            $this->load->view('reports/report_multibagger_large_cap');
        }else if($report_name=="report-multibagger-mid-cap") {
            $this->load->view('reports/report_multibagger_mid_cap');
        }else if($report_name=="report-penny-stocks") {
            $this->load->view('reports/report_penny_stocks');
        }

        $this->load->view('footer');
    }

    public function stock_report($symbol)
    {
        //if(empty($_SESSION['email'])) redirect(base_url().'auth/login');

        $data['symbol'] = $symbol;
        $this->load->view('header');
        $this->load->view('reports/stock_report', $data);
        $this->load->view('footer');
    }

}
