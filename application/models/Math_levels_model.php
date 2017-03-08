<?php
class Math_levels_model extends CI_Model {

	function get_attempts($level) {
		$user_id = $this->session->userdata('user_id');
        switch ($level) {
            case '1':
                $level = 'level1_attempts';
                break;
            case '2':
                $level = 'level2_attempts';
                break;
            case '3':
                $level = 'level3_attempts';
                break;
            case '4':
                $level = 'level4_attempts';
                break;
            case '5':
                $level = 'level5_attempts';
                break;
            case '6':
                $level = 'level6_attempts';
                break;
            case '7':
                $level = 'level7_attempts';
                break;
            case '8':
                $level = 'level8_attempts';
                break;
            case '9':
                $level = 'level9_attempts';
                break;
            case '10':
                $level = 'level10_attempts';
                break;
            default:
                $level = 'level1_attempts';
                break;
        }
        $sql = "SELECT {$level} FROM math_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   $attempts = $row->{$level};
           return($attempts);
		}
        return(3);
	}
    
    function increment_level_attempts($level)
    {
        $user_id = $this->session->userdata('user_id');
        switch ($level) {
            case '1':
                $level = 'level1_attempts';
                break;
            case '2':
                $level = 'level2_attempts';
                break;
            case '3':
                $level = 'level3_attempts';
                break;
            case '4':
                $level = 'level4_attempts';
                break;
            case '5':
                $level = 'level5_attempts';
                break;
            case '6':
                $level = 'level6_attempts';
                break;
            case '7':
                $level = 'level7_attempts';
                break;
            case '8':
                $level = 'level8_attempts';
                break;
            case '9':
                $level = 'level9_attempts';
                break;
            case '10':
                $level = 'level10_attempts';
                break;
            default:
                $level = 'level1_attempts';
                break;
        }
        
		$sql = "UPDATE math_users SET {$level} = {$level}+1 WHERE user_id = ?"; 
        $query = $this->db->query($sql, $user_id);
        return;
    }

	function check_answer($answer,$level){
		//Will increment level if answer is correct
        //only the first 3 characters of the answer are considered
		//security measure to reduce answer log size, and prevent some attacks
		$answer = (strlen($answer) > 3) ? substr($answer,0,3): $answer;

		$user_id = $this->session->userdata('user_id');

		if($user_id=='' || $user_id==NULL){
			return false;
		}
        

		//read users level and name
		$sql = "SELECT name FROM math_users WHERE user_id = ?"; 
		$query = $this->db->query($sql, $user_id);
		if ($query->num_rows() > 0)
		{
		   $row = $query->row();
		   $name = $row->name;
		}

		//add answer log
		$log = array(
			'user_id' => $user_id,
			'name' => $name,
			'level' => $level,
			'answer' => $answer,
			'ip' =>  $_SERVER['REMOTE_ADDR']
		);
		$this->db->insert('math_log_answers',$log);
        
        if($this->get_attempts($level)>2)
        {
            return FALSE;
        }
        
        $this->increment_level_attempts($level);
		//read the hash of correct answer
		$sql = "SELECT answer FROM math_levels WHERE level = ?"; 
		$query = $this->db->query($sql, $level);
		
		if($query->num_rows() > 0){
			$row = $query->row();

			//compare md5 hashes of answer and the correct answer
			//md5 is more than sufficient for security in our case
			if(md5($answer) === $row->answer){

				//if correct answer, increment score, disable this question
                $this->increment_level_attempts($level);
                $this->increment_level_attempts($level);
                $this->db->set('score', 'score+100',FALSE); 
				$this->db->where('user_id', $user_id);
				$this->db->set('passtime', 'NOW()', FALSE);
				$this->db->update('math_users'); 
                
                //return success to the controller
				return TRUE;
			} else{
				//answer is wrong. return false.
				return FALSE;
			}
		}
	}
}