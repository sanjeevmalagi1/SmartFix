<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaint extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('complaints_model');
                
        }
        
	public function View($ComplaintID)
	{
		
            if(($ComplaintID!=NULL)&&($this->session->userdata('logged_in')== TRUE))
            {
                if($complaint['complaint']=$this->complaints_model->ViewComplaint($ComplaintID))
                {
                
                $this->load->view('Templates/stylesheets');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/header');
                $this->load->view('Templates/Complaint',$complaint);
                $this->load->view('Operations/scripts');
                }
                
            }
	}
}
