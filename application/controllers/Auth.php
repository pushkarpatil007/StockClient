<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function register() {

        $this->load->view('header');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', 'FirstName', 'trim|required');
        $this->form_validation->set_rules('last_name', 'LastName', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[1]');

        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/register');
        } else {
            $this->load->model('Registrations_Model');
            $this->load->model('Members_Model');
            $this->load->model('Email_Templates_Model');

            $email  = $_POST['email'];

            if($this->Members_Model->is_member_exist($email))
            {
                //echo 'Member Exist true';

                $data['first_name'] = $_POST['first_name'];
                $data['last_name'] = $_POST['last_name'];
                $data['email'] = $_POST['email'];
                $data['mobile'] = $_POST['mobile'];
                
                $this->session->set_flashdata('validation_message', $email.' is already registered with us. Please try with a different email.');

                //Show Registration page with errors
                $this->load->view('templates/register', $data);

            } else {
                //echo 'Member Exist false';
                
                //Register member
                $registration_id = $this->Registrations_Model->register();

                $registration = $this->Registrations_Model->get($registration_id);

                //Send verification email / OTP SMS
                $template = $this->Email_Templates_Model->get('VerifyPostMemberReg');

                //echo $template->email_body;
                $verification_url = "http://localhost/StockView2/auth/verify-email?reg_id=". $registration->id ."&email=". $registration->email ."&confirmation-token=". $registration->email_verification_code ."";

                $email_body = $template->email_body;
                $email_body = str_replace("#first_name", $registration->first_name, $email_body);
                $email_body = $email_body . '  ' . $verification_url;

                $this->email->from('support@stockview.in', 'StockView Support');
                $this->email->to($email);
                $this->email->subject($template->email_subject);
                $this->email->message($email_body);
                
                $this->email->send();

                //Show Thank You page
                $data['message_text'] = "Thank You for registering with us.";
                $this->load->view('templates/message', $data);

            }
        }

        $this->load->view('footer');
    }


    public function testemail() {

        $this->load->library('email');

        $this->email->from('support@stockview.in', 'StockView Support');
        $this->email->to('pushkarpatil007@gmail.com');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');
        
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        
        $this->email->send();

        echo 'Email Sent.';
    }
    

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

            $this->load->model('Members_Model');
    
            if($this->Members_Model->authenticate($_POST['email'], $_POST['password']))
            {
                //Enter Logs
                //echo 'Login Success';
                //Set sessions
                $this->session->set_userdata('email', $email);
    
                //$this->load->view('header');
                //$this->load->view('templates/members');
    
                //Redirect to private area
                redirect(base_url().'members');
            } else {
                //echo 'Login Failed';
                $this->session->set_flashdata('display_message', 'Incorrect Email / Password, Please try again.');
    
                $data['email'] = $_POST['email'];
    
                $this->load->view('templates/login', $data);
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


    public function verify_email()
    {
        $this->load->view('header');

        $reg_id = $this->input->get('reg_id', TRUE);
        $email = $this->input->get('email', TRUE);
        $confirmation_token = $this->input->get('confirmation-token', TRUE);

        $this->load->model('Registrations_Model');
        $this->load->model('Members_Model');
        $this->load->model('Email_Templates_Model');

        $registration = $this->Registrations_Model->get($reg_id);
        //print_r($registration);

        //echo 'email_verification_code=' . $registration->email_verification_code;
        //echo 'confirmation_token=' . $confirmation_token;


        if($registration->email_verification_code == $confirmation_token) {
            //Insert into Members table
            $this->Members_Model->add_member($reg_id);

            //Send email after activation
            $template = $this->Email_Templates_Model->get('ThankYouPostVerify');

            //echo $template->email_body;
            //echo $registration->email;

            $email_body = $template->email_body;
            $email_body = str_replace("#first_name", $registration->first_name, $email_body);

            $this->email->from('support@stockview.in', 'StockView Support');
            $this->email->to($registration->email);
            $this->email->subject($template->email_subject);
            $this->email->message($email_body);
            $this->email->send();

            //Show SUCCESS message
            $data['message_heading'] = 'Activation Successful';
            $data['message_text'] = 'You account has been activated. Please login using youe registered email '. $registration->email .'.';
            $this->load->view('templates/message',$data);

        } else {
            //Show FAIL message
            $data['message_heading'] = 'Activation Failed';
            $data['message_text'] = 'Activation link expired. Please contact support.';
            $this->load->view('templates/message',$data);
        }

        $this->load->view('footer');

    }

    public function test_email()
    {
        $this->load->library('email');

        $this->email->from('support@stockview.in', 'StockView Support');
        $this->email->to('pushkarpatil007@gmail.com');
        //$this->email->cc('another@another-example.com');
        //$this->email->bcc('them@their-example.com');
        
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        
        $this->email->send();
        
        echo "Email sent.";

    }

}