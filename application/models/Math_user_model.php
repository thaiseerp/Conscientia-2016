<?php
class Math_user_model extends CI_Model {
	
	function get_user() {
		
        $user_id = $this->session->userdata('user_id');
        
		$this->db->select('id');
		$this->db->from('math_users');
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
        
       	$this->db->select('name,email,phone,college');
		$this->db->from('users');
		$this->db->where('id',$this->session->userdata('user_id'));
		$query = $this->db->get();
        if($query->num_rows() >0)
        {
            $row = $query->row();
            $data = array(
                'name' => $row->name,
                'user_id' => $this->session->userdata('user_id'),
                'phone' => $row->phone,
                'college' => $row->college,
                'email' => $row->email
                );
        }
        
		

		/*if($data['user_id']=='' || $data['user_id']==NULL){
			$data['user_id'] = 'no data';
		}*/

		//make sure this user doesn't exist
		$this->db->from('math_users');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$sql = $this->db->get()->result();
		if (is_array($sql)&&count($sql)==1){
			//User already exists.
			//Prevent manipulating details, but log the user in
			return 1;
		}else{
			return $this->db->insert('math_users',$data);
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

		$sql = "SELECT role FROM math_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   return $row->role;
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

		$this->load->model('math_status_model');
		$rank = $this->math_status_model->get_rank($user_id);

		$sql = "SELECT name,score, phone, college, email, role FROM math_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   $data = array(
		   	'user_id' => $user_id,
		   	'name' => $row->name,
		   	'score' => $row->score,
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