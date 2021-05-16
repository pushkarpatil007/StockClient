<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login()
    {
        $this->load->view('header');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[1]');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/login');
        }
        else
        {
            $email = $_POST['email'];
            $username = $this->input->get('username', TRUE);
            $password = $this->input->get('password', TRUE);

            $this->load->model('Admin_Users_Model');
    
            if($this->Members_Model->authenticate($username, $password))
            {
                //Enter Logs
                //echo 'Login Success';
                //Set sessions
                $this->session->set_userdata('username', $username);
    
                //$this->load->view('header');
                //$this->load->view('templates/members');
    
                //Redirect to private area
                redirect(base_url().'admin/dashboard');
            } else {
                //echo 'Login Failed';
                $this->session->set_flashdata('display_message', 'Incorrect Username / Password, Please try again.');
    
                $data['email'] = $_POST['email'];
    
                $this->load->view('admin/templates/login', $data);
                //Redirect to login page
                //redirect(base_url().'auth/login');
            }

        }

        $this->load->view('footer');
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('display_message', 'You are logged out.');
        
        //redirect(base_url().'auth/login');
        $this->load->view('header');
        $this->load->view('templates/login');
        $this->load->view('footer');
    }

}