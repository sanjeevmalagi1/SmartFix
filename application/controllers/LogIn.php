<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogIn extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('users_model');
                
        }

	
	public function index()
	{
            if(($this->session->userdata('logged_in')== FALSE))
            {
                $this->load->view('LogIn/stylesheets');
                $this->load->view('LogIn/content');
                if ($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if($this->users_model->LogInUser($this->input->post('username'),$this->input->post('password')))
                    {
                        $sessiondata=$this->users_model->GetUserSessionData($this->input->post('username'));
                        $session = array(
                                    'ID'  => $sessiondata['ID'],
                                    'Name'  => $sessiondata['Name'],
                                    'UserName'  => $sessiondata['UserName'],
                                    'Email'  => $sessiondata['Email'],
                                    'Phone'  => $sessiondata['Phone'],
                                    'Type'  => $sessiondata['Type'],
                                    'logged_in' => TRUE
                                    );

                        $this->session->set_userdata($session);
                        if($this->session->userdata('Type') == "normal" )
                        {
                            redirect(base_url().'index.php/User/Dashborad');
                        }
                        else if($this->session->userdata('Type') == "admin" )
                        {
                            redirect(base_url().'index.php/Admin/Complaints');
                        }
                        elseif (($this->session->userdata('Type') == "worker" )) 
                        {
                            redirect(base_url().'index.php/Worker/Assignments');
                        }
                        
                    }
                    else
                    {
                        echo 'log IN failed';
                    }
                }
                
            }
            
                
	}
        
        public function SignUp()
        {
            if(($this->session->userdata('logged_in')== FALSE))
            {
                if ($_SERVER['REQUEST_METHOD']=='POST')
                {
                    
                    $this->users_model->AddUser($this->input->post('username'),$this->input->post('password'),$this->input->post('email'));
                    redirect(base_url().'index.php/LogIn?msg=UAS'); 
                }
                else
                {
                    echo 'THis page only responds for server requests!! Please dont tresspass,k?';
                }
            }
        }
        
        public function LogOut()
        {
            if(($this->session->userdata('logged_in')== TRUE))
            {
                $this->session->sess_destroy();
            }
            redirect(base_url().'index.php/LogIn');
        }
}
