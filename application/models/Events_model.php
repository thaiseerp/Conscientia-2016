<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Events_model extends CI_Model{
	function __construct() {
		
	}
    
    // All functions return bool
    
    function get_event_name($id)
    {
        switch ($id) {
            case 1:
                return('botsup');
                break;
            case 2:
                return('linefollower');
                break;
            case 3:
                return('salilsthalchar');
                break;
            case 4:
                return('cosmicclash');
                break;
            case 5:
                return('astroreflections');
                break;
            case 6:
                return('nightskyhunt');
                break;
            case 7:
                return('astroabc');
                break;
            case 8:
                return('junkyardwars');
                break;
            case 9:
                return('machinist');
                break;
            case 10:
                return('screwed');
                break;
            case 11:
                return('bridgeup');
                break;
            case 12:
                return('contraptions');
                break;
            case 13:
                return('caddraw');
                break;
            case 14:
                return('hydranoid');
                break;
            case 15:
                return('webbed');
                break;
            case 16:
                return('ccube');
                break;
            case 17:
                return('mathematrix');
                break;
            case 18:
                return('astronomia');
                break;
            case 19:
                return('mobiusstrip');
                break;
            case 20:
                return('airstrike');
                break;
            case 21:
                return('techflight');
                break;
            case 22:
                return('prakshepan');
                break;
            case 23:
                return('airglide');
                break;
            case 24:
                return('lcd');
                break;
            case 25:
                return('circuiter');
                break;
            case 26:
                return('electromania');
                break;
            case 27:
                return('tarang');
                break;
            case 28:
                return('panchmantra');
                break;
            case 29:
                return('imagein');
                break;
            case 30:
                return('howadamdidit');
                break;
            case 31:
                return('phyknight');
                break;
            case 32:
                return('simphy');
                break;
            case 33:
                return('ricerca');
                break;
            case 34:
                return('blackbox');
                break;
            case 35:
                return('techwiz');
                break;
            case 36:
                return('alphageek');
                break;
            case 37:
                return('bletchleypark');
                break;
            case 38:
                return('mathquiz');
                break;
            default:
                return(FALSE);
        }
    }
    
    function register_event($event_name)
    {
       $data = array(
		    'user_id' => $this->session->userdata('user_id')
		);
        $table = 'event_'.$event_name;
        if(!$this->check_register_event($event_name))
        $this->db->insert($table, $data);
        return(TRUE);
    }
    
    function register_workshop($workshop_name)
    {
       $data = array(
		    'user_id' => $this->session->userdata('user_id')
		);
        $table = 'workshop_'.$workshop_name;
        if(!$this->check_register_workshops($workshop_name))
        $this->db->insert($table, $data);
        return(TRUE);
    }
    
    function check_register_event($event_name)
    {
        $table = 'event_'.$event_name;
        $user_id = $this->session->userdata('user_id');
        
		$this->db->select('id');
		$this->db->from($table);
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
    
    function check_register_workshops($workshop_name)
    {
        $table = 'workshop_'.$workshop_name;
        $user_id = $this->session->userdata('user_id');
        
		$this->db->select('id');
		$this->db->from($table);
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
    
    
    
}