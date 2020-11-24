<?php

class Page_Model extends CI_Model{

    function __construct(){
        
        parent::__construct();
        $this->load->database();
  
	}

function get_org(){
    
  $query = $this->db->query('SELECT * FROM organization ORDER by org_name ASC');
        return $query->result();
 }

function get_org_type(){
    
  $query = $this->db->query('SELECT * FROM organization_types ORDER by org ASC');
        return $query->result();
 }

 function get_affliate(){
    
  $query = $this->db->query('SELECT * FROM fossorg ORDER by name ASC');
        return $query->result();
 }

public function get_school_by_id($sch_id) {     
        $this->db->select('*');
        $this->db->from('school');
        $this->db->where('sch_id', $sch_id);
        $query = $this->db->get();
        return $query->row_array();
    }

function get_school(){
    
  $query = $this->db->query('SELECT * FROM school ORDER by sch_name ASC');
        return $query->result();
 }

public function check_user($first_name, $last_name){
        //$this->db->where(array('username' = >$username, 'password' => $password));
        $query = $this->db->get_where('user_table', array('first_name' => $first_name, 'last_name' => $last_name));   //status sholud be 1
        
        if($query->num_rows() == 1){
    
            return true;
        }else{
            return false;
        }
    }

public function check_user_email($email){
        //$this->db->where(array('username' = >$username, 'password' => $password));
        $query = $this->db->get_where('email_table', array('email' => $email));   //status sholud be 1
        
        if($query->num_rows() == 1){
    
            return true;
        }else{
            return false;
        }
    }

public function insert_user($data_user,$user_id){
        
         $this->db->where('user_id',$user_id);
           $q = $this->db->get('user_table');

           if ( $q->num_rows() > 0 ) 
           {
              $this->db->where('user_id',$user_id);
              $this->db->update('user_table',$data_user);
           } else {
              $this->db->set('user_id', $user_id);
              $this->db->insert('user_table',$data_user);
           }
        
}

public function insert_liaison($data_liaison,$user_id){
        
        $this->db->where('user_id',$user_id);
           $q = $this->db->get('liaison');

           if ( $q->num_rows() > 0 ) 
           {
              $this->db->where('user_id',$user_id);
              $this->db->update('liaison',$data_liaison);
           } else {
              $this->db->set('user_id', $user_id);
              $this->db->insert('liaison',$data_liaison);
           }
      
}


public function insert_org($data_org){
        
        return $this->db->insert('organization',$data_org);
      
}

public function insert_contact($data_contact,$user_id){

        $this->db->where('user_id',$user_id);
           $q = $this->db->get('contact');

           if ( $q->num_rows() > 0 ) 
           {
              $this->db->where('user_id',$user_id);
              $this->db->update('contact',$data_contact);
           } else {
              $this->db->set('user_id', $user_id);
              $this->db->insert('contact',$data_contact);
           }
        
      
}

public function insert_student($data_student,$user_id){

        $this->db->where('user_id',$user_id);
           $q = $this->db->get('student');

           if ( $q->num_rows() > 0 ) 
           {
              $this->db->where('user_id',$user_id);
              $this->db->update('student',$data_student);
           } else {
              $this->db->set('user_id', $user_id);
              $this->db->insert('student',$data_student);
           }
}


public function insert_school($data_school){
        
        return $this->db->insert('school',$data_school);
      
}

public function insert_interest($data_interest,$user_id){

        $this->db->where('user_id',$user_id);
           $q = $this->db->get('interests');

           if ( $q->num_rows() > 0 ) 
           {
              $this->db->where('user_id',$user_id);
              $this->db->update('interests',$data_interest);
           } else {
              $this->db->set('user_id', $user_id);
              $this->db->insert('interests',$data_interest);
           }

      
}

public function insert_affliate($data_affliate,$user_id){

        $this->db->where('user_id',$user_id);
           $q = $this->db->get('affiliate');

           if ( $q->num_rows() > 0 ) 
           {
              $this->db->where('user_id',$user_id);
              $this->db->update('affiliate',$data_affliate);
           } else {
              $this->db->set('user_id', $user_id);
              $this->db->insert('affiliate',$data_affliate);
           }
 
}

    
    
}

?>