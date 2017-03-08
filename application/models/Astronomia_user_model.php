<?php
class Astronomia_user_model extends CI_Model {
	
	function get_user() {
		
        $user_id = $this->session->userdata('user_id');
        
		$this->db->select('id');
		$this->db->from('astronomia_users');
		$this->db->where(array('user_id'=> $user_id));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0)
        {
			return(TRUE);
		}
        else
        {
            return(FALSE);
        }
	}

	function register(){
		//user just signed up. pull personal information from users table
		//and add them to mathematrix database
        
       	$this->db->select('name,email,phone,college,fb_uid');
		$this->db->from('users');
		$this->db->where('id',$this->session->userdata('user_id'));
		$query = $this->db->get();
        if($query->num_rows() >0)
        {
            $row = $query->row();
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'name' => $row->name,
                'level' => 1,
                'phone' => $row->phone,
                'college' => $row->college,
                'email' => $row->email,
                'fb_uid' => $row->fb_uid
                );
        }

		//make sure this user doesn't exist
		$this->db->from('astronomia_users');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$sql = $this->db->get()->result();
		if (is_array($sql)&&count($sql)==1){
			return 1;
		}else{
			return $this->db->insert('astronomia_users',$data);
		}
		
	}

	function get_role($user_id=''){
		//get role for current user or user with user_id=?
		if($user_id == ''){
			$user_id = $this->session->userdata('user_id');
		}

		if($user_id=='' || $user_id==NULL){
			return 1;
		}

		$sql = "SELECT role FROM astronomia_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   return $row->role;
		}
	}
    
	function get_level($user_id=''){
		//get current level

		if($user_id == ''){
			$user_id = $this->session->userdata('user_id');
		}

		if($user_id=='' || $user_id==NULL){
			return 0;
		}

		$sql = "SELECT level FROM astronomia_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);

		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   $current_level = $row->level;
		   return $current_level;
		}else{
			return 0;
		}
	}

	function read_user($user_id=''){
		//read user's details
		//this is used in profile (and in admin's users tab)

		if($user_id == ''){
			$user_id = $this->session->userdata('user_id');
		}

		if($user_id=='' || $user_id==NULL){
			return false;
		}

		$this->load->model('astronomia_status_model');
		$rank = $this->astronomia_status_model->get_rank($user_id);

		$sql = "SELECT name,level, phone, college, email, role FROM astronomia_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   $data = array(
		   	'user_id' => $user_id,
		   	'name' => $row->name,
		   	'level' => $row->level,
		   	'phone' => $row->phone,
		   	'college' => $row->college,
		   	'email' => $row->email,
		   	'role' => $row->role,
		   	'rank' => $rank
		   	);

		   return $data;
		}else{
			return false;
		}

	} 
}