<?php
class Astronomia_status_model extends CI_Model {

	function get_leaderboard(){
		//prepare a leaderboard
		$data = array();

		$details = array(
			'rank' => NULL,
			'name' => NULL,
			'level' => NULL,
			'college' => NULL
		);

		$rank = 1;
		
		$sql = "SELECT name, level, college, role FROM astronomia_users ORDER BY level DESC, passtime ASC"; 
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				//Only regular users are shown in the leaderboard
				//banned users and admins have a rank 0, and are excluded.
				if($row->role == 1){

					$details['rank'] = $rank;
					$details['name'] = $row->name;
					$details['level'] = $row->level;
					$details['college'] = $row->college;
					array_push($data, $details);

					$rank++;
				}
			}
			return $data;
		}else{
			//couldn't find any rows!?
			return false;
		}
		
	}

	function get_rank($user_id=''){
		//calculate rank of the current user, or given fb_uid

		if($user_id == ''){
			$user_id = $this->session->userdata('user_id');
		}

		if($user_id=='' || $user_id==NULL){
			return 0;
		}

		//make sure the uid corresponds to a regular user
		$sql = "SELECT role FROM astronomia_users WHERE user_id = $user_id"; 
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			$row = $query->row();
			$role = $row->role;
		}else{
			return 0;
		}

		if($role!=1){
			//Rank is 0 for anyone other than a regular user.
			return 0;
		}

		//count from 0 to the current user's position
		$rank = 0;

		$sql = "SELECT user_id FROM astronomia_users WHERE role=1 ORDER BY level DESC, passtime ASC"; 
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$rank++;
				if($row->user_id == $user_id){
					return $rank;
				}
			}
		}

		return 0;

	}

}
