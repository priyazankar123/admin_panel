<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Login extends CI_Controller { 
       function __construct()
    {
       
          parent::__construct();
    
          $this->load->helper(array('form', 'url','html'));
		  $this->load->model("login_model");
		  $this->load->model("data_model");
		  $this->load->library('session');
		 
    }
  
    public function index()  
    {  
	   
        $this->login();  
    }  
  
    public function login()  
    {  
        $this->load->view('login_view');  
    }  
  
    public function signin()  
    {  
        $this->load->view('signin');  
    }  
  
    public function data()  
    {  
        if ($this->session->userdata('currently_logged_in'))   
        {  
            $this->load->view('common/header');
			
			$this->load->view('common/menu');
			
		  	$this->load->view('common/footer');           
		   
        } else {  
            redirect('Login/invalid');  
        }  
    }  
  
    public function invalid()  
    {  
        $this->load->view('invalid');  
    }  
  
    public function login_action()  
    {  
        $this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('username', 'Username:', 'required|trim|xss_clean|callback_validation');  
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');  
  
        if ($this->form_validation->run())   
        {  
            $data = array(  
                'username' => $this->input->post('username'),  
                'currently_logged_in' => 1  
                );    
                    $this->session->set_userdata($data);  
                redirect('Login/data');  
        }   
        else {  
            $this->load->view('login_view');  
        }  
    }  
  
    
    public function validation()  
    {  
        $this->load->model('login_model');  
  
        if ($this->login_model->log_in_correctly())  
        {  
  
            return true;  
        } else {  
            $this->form_validation->set_message('validation', 'Incorrect username/password.');  
            return false;  
        }  
    }  
  
    public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Login/login');  
    }  
  
}  
?>