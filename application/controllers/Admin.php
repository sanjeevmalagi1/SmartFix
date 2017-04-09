<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('complaints_model');
                $this->load->model('users_model');
                
        }
        
        
        public function Complaints()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/header');
                $Complaints['Complaints']=$this->complaints_model->GetComplaints();
                
                //print_r($Requests['Requests']);
                $this->load->view('Admin/Complaints',$Complaints);
                $this->load->view('User/scripts');
	}
}
