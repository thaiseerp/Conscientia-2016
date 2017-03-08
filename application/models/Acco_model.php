<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Acco_model extends CI_Model{

	public function register_date($date){
        $user_id = $this->session->userdata('user_id');
        
        $this->db->select('name,user_email,phone,college');
		$this->db->from('users');
		$this->db->where('id',$user_id);
		$query = $this->db->get();
        if($query->num_rows() >0)
        {
            $row = $query->row();
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'name' => $row->name,
                'phone' => $row->phone,
                'college' => $row->college,
                'email' => $row->user_email,
                'date' => $date
                );
        }

		//make sure this user doesn't exist
		$this->db->from('acco_users');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$sql = $this->db->get()->result();
		if (is_array($sql)&&count($sql)==1){
			return TRUE;
		}else{
			$this->db->insert('acco_users',$data);
            return TRUE;
		}
        
    }
    
    public function acco_required()
    {
        $user_id = $this->session->userdata('user_id');
        
        $this->db->select('accomodation');
		$this->db->from('users');
		$this->db->where('id',$user_id);
		$query = $this->db->get();
        
        if($query->num_rows() >0)
        {
            $row = $query->row();
            if($row->accomodation == 1)
            return TRUE;
            else
            return FALSE;
        }
        else
        return FALSE;
        
    }
}
