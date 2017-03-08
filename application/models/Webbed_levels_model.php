<?php
class Webbed_levels_model extends CI_Model {

	function get_level() {
		//get level for the current user
		//current level is read from the database to prevent manipulation

		$user_id = $this->session->userdata('user_id');

		if($user_id=='' || $user_id==NULL){
			return 0;
		}

		//set a default value, just in case.
		$current_level = 1;

		$sql = "SELECT level FROM webbed_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);

		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   $current_level = $row->level;
		}

		//now we have the current level of the user

		$sql = 'SELECT level, title, difficulty, content, background, placeholder, cookie, javascript, html_comment, success_image, status FROM webbed_levels WHERE level = ?'; 
		$query = $this->db->query($sql, $current_level);

		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   //if status is 0, level is not yet activated
		   if($row->status==0){
		   	return 0;
		   }
		   //return all details to controller
		   return $row;
		}

		//User is in the highest level
		//Returning 0 displays the wait view.
		return 0;
	}

	function check_answer($answer){
		
		$answer = (strlen($answer) > 30) ? substr($answer,0,30): $answer;

		$user_id = $this->session->userdata('user_id');

		if($user_id=='' || $user_id==NULL){
			return false;
		}

		$current_level = 1;

		//read users level and name
		$sql = "SELECT level,name FROM webbed_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   $current_level = $row->level;
           $name = $row->name;
		}

		//add answer log
		$log = array(
            'name' => $name,
			'user_id' => $user_id,
			'level' => $current_level,
			'answer' => $answer,
			'ip' =>  $_SERVER['REMOTE_ADDR'],
		);
		$this->db->insert('webbed_log_answers',$log);

		//read the hash of correct answer
		$sql = "SELECT answer FROM webbed_levels WHERE level = ?"; 
		$query = $this->db->query($sql, $current_level);
		
		if($query->num_rows() > 0){
			$row = $query->row();

			if(md5($answer) === $row->answer){

				//if correct answer, increment the level
				$this->db->set('level', $current_level+1); 
				$this->db->where('user_id', $user_id);
				$this->db->set('passtime', 'NOW()', FALSE);
				$this->db->update('webbed_users'); 

				return true;
			} else{
				return false;
			}
		}
	}

}