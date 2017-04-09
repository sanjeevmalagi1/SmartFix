<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('complaints_model');
                $this->load->model('users_model');
                
        }
        
        public function Dashborad() {
            $this->load->view('Templates/stylesheets');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/header');
                
                
                
                $this->load->view('User/Dashboard');
                $this->load->view('User/scripts');
        }
        
	public function Stories()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/header');
                
                
                
                $this->load->view('User/Dashboard');
                $this->load->view('User/scripts');
	}
        
        public function Requests()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/header');
                $Requests['Requests']=$this->complaints_model->GetComplaintsOfUser($this->session->userdata('ID'));
                
                //print_r($Requests['Requests']);
                $this->load->view('User/Requests',$Requests);
                $this->load->view('User/scripts');
	}
}
