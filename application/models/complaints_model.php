<?php

class complaints_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }
        
        
        
        
        public function AddComplaint($UserID,$Description,$Address,$lat,$lng)
        {
            $data = array(
                    'Complainer_ID' => $UserID,
                    'Description' => $Description,  
                    'Address' => $Address,
                    'latitude' => $lat,
                    'longitude' => $lng
                    
                );

                $this->db->insert('complaints', $data);
        }
        
        public function GetComplaintsOfUser($UserID) {
            $this->db->where('Complainer_ID', $UserID);    
            $query = $this->db->get('complaints');
            $result = $query->result_array();
            return $result;
        }
        
        public function GetComplaints() {
            $condition = array(
                    'status' => 'active'
                );
            $this->db->where($condition);
            $query = $this->db->get('complaints');
            $result = $query->result_array();
            return $result;
        }
        
         public function ViewComplaint($ComplaintID) {
            $this->db->where('ID', $ComplaintID);    
            $query = $this->db->get('complaints');
            $result = $query->row_array();
            return $result;
        }
        
        public function AssignWorker_admin($ComplaintID,$AdminID,$WorkerID) {
           
            $data = array(
                    'Worker_ID' => $WorkerID,
                    'Admin_ID' => $AdminID,
                    'Status' => 'busy'
                );
                //print_r($data);
              $condition = array(
                    'ID' => $ComplaintID
                );
              $this->db->where($condition);
              print_r($this->db->update('complaints', $data));
        }
        
        public function GetComplaints_worker($UserID) {
            $condition = array(
                  'Status !=' => 'complete',
                  'Status !=' => 'confirm',  
                  'Worker_ID' => $UserID
                );
            $this->db->where($condition);    
            $query = $this->db->get('complaints');
            $result = $query->result_array();
            return $result;
        }
        
        function WorkComplete_worker($ComplaintID,$WorkerID) {
            $data = array(
                    'Status' => 'complete'
                );
            $condition = array(
                  'ID' => $ComplaintID,
                  'Worker_ID' => $WorkerID
                );
              $this->db->where($condition);
              $this->db->update('complaints', $data);
        }
        
        function ConfirmComplete_user($ComplaintID) {
            $data = array(
                    'Status' => 'confirm'
                );
            $condition = array(
                  'ID' => $ComplaintID
                  
                );
              $this->db->where($condition);
              $this->db->update('complaints', $data);
        }
        
        function CancelRequest_user($ComplaintID) {
            
            $condition = array(
                  'ID' => $ComplaintID
                  
                );
              $this->db->where($condition);
              $this->db->delete('complaints');
        }
        
        
 
}