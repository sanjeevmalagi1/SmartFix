<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operations extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->model('complaints_model');
                $this->load->model('users_model');
                
        }
        
	public function AddComplaint()
	{
		$this->load->view('Templates/stylesheets');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/header');
                
                if ($_SERVER['REQUEST_METHOD']=='POST')
                {
                   $this->complaints_model->AddComplaint($this->session->userdata('ID'),$this->input->post('description'),$this->input->post('address'),$this->input->post('latitude'),$this->input->post('longitude'));
                }
                
                $this->load->view('Operations/AddComplaint');
                $this->load->view('Operations/scripts');
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
        
        public function Assign($ComplaintID,$Action=NULL,$WorkerID=NULL)
	{
		
            if(($ComplaintID!=NULL)&&($this->session->userdata('logged_in')== TRUE))
            {
                
                $this->load->view('Templates/stylesheets');
                $this->load->view('Templates/sidebar');
                $this->load->view('Templates/header');
                
                if($Workers['Workers']=  $this->users_model->GetAvailableWorkers())
                {
                    $this->load->view('Admin/AssignWorkers',$Workers);
                }
                
                
                
                if(($ComplaintID!=NULL)&&($Action!=NULL)&&($WorkerID!=NULL))
                {
                    if($Action=="AssignWorker")
                    {
                        $this->complaints_model->AssignWorker_admin($ComplaintID, $this->session->userdata('ID'),$WorkerID);
                        $this->users_model->AssignWorker($WorkerID);
                        redirect(base_url().'index.php/Admin/Complaints');
                    }
                }
                $this->load->view('Operations/scripts');
                
            }
	}
        
        public function Complete($ComplaintID=NULL) {
            if(($ComplaintID!=NULL)&&($this->session->userdata('logged_in')== TRUE)&&($this->session->userdata('Type')== 'worker'))
                {
                    $this->load->view('Templates/stylesheets');
                    $this->load->view('Templates/sidebar');
                    $this->load->view('Templates/header');
                    $this->load->view('Operations/CompleteAssignment');
                    if($_SERVER['REQUEST_METHOD']=='POST')
                    {
                        $this->complaints_model->WorkComplete_worker($ComplaintID, $this->session->userdata('ID'));
                        $this->users_model->WorkComplete($this->session->userdata('ID'));
                        redirect(base_url().'index.php/Worker/Assignments');
                    }
                    
                    $this->load->view('Operations/scripts');
                    //$this->complaints_model->WorkComplete_worker($ComplaintID, $this->session->userdata('ID'));
                    //$this->users_model->WorkComplete($this->session->userdata('ID'));
                    //redirect(base_url().'index.php/Worker/Assignments');
                }
        }
        
        public function ConfirmComplete($ComplaintID) {
            if($ComplaintID!=NULL)
            {
                
                //$this->complaints_model->ConfirmComplete_user($ComplaintID);
                //redirect(base_url().'index.php/User/Requests');    
                
            }
        }
        
        public function CancelRequest($ComplaintID) {
            if($ComplaintID!=NULL)
            {
                $this->complaints_model->CancelRequest_user($ComplaintID);
                redirect(base_url().'index.php/User/Requests');    
            }
        }
}
