<?php

class users_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }
        
        
        public function LogInUser($UserName,$Password) {
            $encPassword=  md5($Password);
            $this->db->select('Password')->where('UserName',$UserName);
            $query = $this->db->get('users');
            $result=$query->row_array();
            
            if($result)
            {
                if($encPassword === $result['Password'])
                {
                    return TRUE;
                }
                else 
                {
                    return FALSE;
                }
            }
            else
            {
                return FALSE;
            }
        }
        
        public function AddUser($UserName,$Password,$Email)
        {
            $data = array(
                    
                    'UserName' => $UserName,  
                    'Password' => md5($Password),
                    'Email'=>$Email
                );

                $this->db->insert('users', $data);
        }
        
        public function GetUserSessionData($UserName)
        {
            $this->db->where('UserName', $UserName);    
            $query = $this->db->get('users');
            $result = $query->row_array();
            return $result;
        }
        
        public function GetNameFromID($UserID)
        {
            $this->db->where('ID', $UserID);    
            $query = $this->db->get('users');
            $result = $query->row_array();
            return $result['UserName'];
        }
        
        
        public function GetAvailableWorkers() {
            $conditions = array(
                    
                    'Type' => 'worker',  
                    'status' => 'available'
                );
            
            $this->db->where($conditions);    
            $query = $this->db->get('users');
            $result = $query->result_array();
            return $result;
        }
        
        public function AssignWorker($UserID) {
             $data = array(
                    'status' => 'busy'
                );
              $condition = array(
                    'ID' => $UserID,
                    'type' => 'worker'
                );
              $this->db->where($condition);
              $this->db->update('users', $data);
        }
        
        public function WorkComplete($UserID) {
                $data = array(
                    'status' => 'available'
                );
              $condition = array(
                    'ID' => $UserID,
                    'type' => 'worker'
                );
              $this->db->where($condition);
              $this->db->update('users', $data);
        }
 
}