<?php
class Math_admin_model extends CI_Model {
	
    function get_users(){
		//retrieve user details
		$this->load->model('math_user_model');

		$users = array();

		$sql = "SELECT user_id FROM math_users ORDER BY name ASC LIMIT 200"; 
		/*
		When there are so many users (500+), this function takes up too much time
		and resources to execute. You might want to add a pagination feature, or just
		limit the number of users displayed to a small number like this:
		$sql = "SELECT user_id FROM users ORDER BY name ASC LIMIT 200";

		Reason and another alternative is given in the comments below 

		The answer log function works fine independent of this limit.
		*/
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$uid = $row->user_id;
				//This read_user function is called for each user
				//from the table. This is the main cause of high execution time.
				//Best practice would be to request the data from the aboe SQL query itself
				array_push($users, $this->math_user_model->read_user($uid));
			}
		}

		return $users;
	}

	function get_log($user_id){
		//Get user log, return if no user_id given

		if($user_id=='' || $user_id==NULL){
			return false;
		}

		$user_log = array();

		$sql = "SELECT name, level, answer, timestamp, ip FROM math_log_answers WHERE user_id = ? ORDER BY level DESC, timestamp DESC"; 
		$query = $this->db->query($sql, $user_id);
		
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row)
		   {

		   	$log=array(
		   		'name' => $row->name,
		   		'level' => $row->level,
		   		'answer' => $row->answer,
		   		'timestamp' => $row->timestamp,
		   		'ip' => $row->ip
		   		);
		   	array_push($user_log, $log);
		   }

		   return $user_log;
		}else{
			return false;
		}
	}
}
