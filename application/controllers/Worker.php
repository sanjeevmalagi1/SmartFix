<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Worker extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('complaints_model');
                $this->load->model('users_model');
                
        }
        
        
        public function Assignments()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/header');
                $Assignments['Assignments']=$this->complaints_model->GetComplaints_worker($this->session->userdata('ID'));
                
                //print_r($Requests['Requests']);
                $this->load->view('Worker/Assignments',$Assignments);
                $this->load->view('User/scripts');
	}
}
