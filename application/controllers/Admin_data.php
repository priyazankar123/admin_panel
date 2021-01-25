<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Admin_data extends CI_Controller { 
       function __construct()
    {
       
          parent::__construct();
    
          $this->load->helper(array('form', 'url','html'));
		  $this->load->model("data_model");
		  $this->load->library('session');
		 
    }
  
    public function index()  
    {  
	     if ($this->session->userdata('currently_logged_in'))   
        {  
            $this->load->view('common/header');
			$this->load->view('common/menu_foradmin');
			           
		   
        } else {  
            redirect('Login/invalid');  
        }  
        
    }  
	public function view_user()  
    {  
	      
            $this->load->view('common/header');
			$this->load->view('common/menu_foradmin');
			$data['view_all']= $this->data_model->get_allusers();
			$this->load->view('all_users',$data);
			$this->load->view('common/footer');           
		
        
    }  
	public function view_user_info()  
    {  
	        $id =$this->uri->segment(3);    
            $data['view_user']= $this->data_model->get_userdetails($id);
			$data['view_guest']= $this->data_model->get_guestdetails($id);
			$this->load->view('useremail',$data);
		  
    }  
	public function view_guest_info()  
    {  
	        $id =$this->uri->segment(3);    
            $data['view_user']= $this->data_model->get_userdetails($id);
			$data['view_guest']= $this->data_model->get_guestdetails($id);
			$this->load->view('guestemail',$data);
		  
    }  
	
	public function view_allinfo()  
    {  
	        $id =$this->uri->segment(3);    
            $this->load->view('common/header');
			$this->load->view('common/menu_foradmin');
			$data['view_user']= $this->data_model->get_userdetails($id);
			$data['view_guest']= $this->data_model->get_guestdetails($id);
			
			$this->load->view('all_details',$data);
			$this->load->view('common/footer');           
		   
    }  
  
   
}  
?>