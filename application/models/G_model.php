<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class G_model extends CI_Model{
	function __construct() {
		$this->tableName = 'users';
		$this->primaryKey = 'id';
	}
	public function checkUser($gdata = array()){
		$this->db->select($this->primaryKey);
		$this->db->from($this->tableName);
		$this->db->where(array('g_uid'=>$gdata['g_uid'],'email'=>$gdata['email']));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0)
        {
			return('signin');
		}
        else
        {
            $query = NULL;
            
            $query1 = $this->db->get_where('groups',array('name' => $this->config->item('default_group', 'ion_auth')),1)->row();
            if( !isset($query1->id) && empty($groups) )
            {
                $this->set_error('account_creation_invalid_default_group');
                return FALSE;
            }

            // capture default group details
            $default_group = $query1;

            // IP Address
            $password_d = 'nogpassword';   // Default Password for FB Users    
            $salt       = $this->ion_auth_model->store_salt ? $this->ion_auth_model->salt() : FALSE;
            $password   = $this->ion_auth->hash_password($password_d, $salt);
            $data = array(
                'g_uid' => $gdata['g_uid'],
                'email' => $gdata['email'],
                'user_email' => $gdata['email'],
                'password' => $password,
                'active' => '1'
            );

            $this->ion_auth->trigger_events('extra_set');

            $this->db->insert('users', $data);

            $id = $this->db->insert_id();

            // add in groups array if it doesn't exits and stop adding into default group if default group ids are set
            if( isset($default_group->id) && empty($groups) )
            {
                $groups[] = $default_group->id;
            }

            if (!empty($groups))
            {
                // add to groups
                foreach ($groups as $group)
                {
                    $this->ion_auth->add_to_group($group, $id);
                }
            }

            $this->ion_auth->trigger_events('post_register');

            return (isset($id)) ? $id : FALSE;
		}
    }
}
