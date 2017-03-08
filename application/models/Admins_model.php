<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins_model extends CI_Model {
    
    function getregistration($event)
    {
        $events_table = 'event_'.$event;
       // $sql = "SELECT id FROM ".$events_table." ORDER BY id DESC";
        $data = array();
		$details = array(
			'name' => NULL,
			'email' => NULL,
			'phone' => NULL,
            'college' => NULL,
		);
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join($events_table, $events_table.'.user_id = users.id');
        $this->db->order_by($events_table.'.id','DESC');
        $query = $this->db->get();
        
        if($query->num_rows()>0)
        {
			foreach ($query->result() as $row)
			{
				$details['name'] = $row->name;
                $details['email'] = $row->user_email;
                $details['phone'] = $row->phone;
                $details['college'] = $row->college;
                array_push($data, $details);
			}
			return $data;
        }
        else
        return(FALSE);
    }
    
    function get_acco_details()
    {

        $data = array();
		$details = array(
			'name' => NULL,
			'email' => NULL,
			'phone' => NULL,
            'college' => NULL,
            'date' => NULL,
		);
        
        $this->db->select('name,email,phone,college,date');
        $this->db->from('acco_users');
        $this->db->order_by('date','ASC');
        $query = $this->db->get();
        
        if($query->num_rows()>0)
        {
			foreach ($query->result() as $row)
			{
				$details['name'] = $row->name;
                $details['email'] = $row->email;
                $details['phone'] = $row->phone;
                $details['college'] = $row->college;
                $details['date'] = $row->date;
                array_push($data, $details);
			}
			return $data;
        }
        else
        return(FALSE);
    }
    
    function getwsregistration($workshop)
    {
        $workshop_table = 'workshop_'.$workshop;
       // $sql = "SELECT id FROM ".$workshop_table." ORDER BY id DESC";
        $data = array();
		$details = array(
			'name' => NULL,
			'email' => NULL,
			'phone' => NULL,
            'college' => NULL,
		);
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join($workshop_table, $workshop_table.'.user_id = users.id');
        $this->db->order_by($workshop_table.'.id','DESC');
        $query = $this->db->get();
        
        if($query->num_rows()>0)
        {
			foreach ($query->result() as $row)
			{
				$details['name'] = $row->name;
                $details['email'] = $row->user_email;
                $details['phone'] = $row->phone;
                $details['college'] = $row->college;
                array_push($data, $details);
			}
			return $data;
        }
        else
        return(FALSE);
    }


}