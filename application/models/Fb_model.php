<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fb_model extends CI_Model {

	
	function get_user() {
		//Get user's uid from facebook

		$query = NULL;
		try {
			$query = $this->facebook->getUser();
			if(!$query) {
				//user is not logged in
				$data['is_true'] = FALSE;
				return $data;
			}
		}catch (FacebookApiException $e){
			//check log folder. log exceptions for debugging.
			//logging can be changed or disabled in config.php
			log_message('error', 'get_user in user_model got an exception on line 1');

			//some api error occured. user is not logged in.
			$data['is_true'] = FALSE;
			return $data;
		}
	
		//If all goes good, return true, with uid
		$data['is_true'] = TRUE;
		$data['fb_uid'] = $query;
		return $data;
	}
    
	function signed_in(){
		//check if user is new, or returning
		//function is called when user has signed in (or signed up)
		$uid = NULL;

		try {
			$uid = $this->facebook->getUser();
			if(!$uid) {
				return 0;
			}
		}catch (FacebookApiException $e){
			log_message('error', 'signed_in in user_model got an exception.');
			return 0;
		}

		$this->db->from('users');
		$this->db->where('fb_uid',$uid);
		$sql = $this->db->get()->result();
		if (is_array($sql)&&count($sql)==1){
			//user already exists. just sign-in the user
			return 'signin';
		}else{
			//return signup, and the controller loads the view
			//to read first-time details
			return 'signup';
		}
	}
    
	function get_user_details(){
		//get details of the current user
		//used to fill in the database initially.
		$query = NULL;

		try {
			$query = $this->facebook->api('/me');
			if(!$query) {
				return 0;
			}
		}catch (FacebookApiException $e){
			log_message('error', 'get_user_details in user_model got an exception.');

			return 0;
		}

		$details = array(
			'fb_uid' => $query['id']
		);
		return $details;
	}
    
	function signup(){
		//user just signed up. request personal information
		//and add them to our database

		$query = NULL;

		try {
			$query2 = $this->facebook->api('/me');
			if(!$query2) {
				return 0;
			}
		}catch (FacebookApiException $e){
			log_message('error', 'get_user in user_model got an exception');
			return 0;
		}
        
        
		$query1 = $this->db->get_where('groups',array('name' => $this->config->item('default_group', 'ion_auth')),1)->row();
		if( !isset($query1->id) && empty($groups) )
		{
			$this->set_error('account_creation_invalid_default_group');
			return FALSE;
		}

		// capture default group details
		$default_group = $query1;

		// IP Address
        $password_d = 'nofbpassword';   // Default Password for FB Users    
        $salt       = $this->ion_auth_model->store_salt ? $this->ion_auth_model->salt() : FALSE;
		$password   = $this->ion_auth->hash_password($password_d, $salt);
		$data = array(
            'fb_uid' => $query2['id'],
			'email' => $query2['id'].'@facebook.com',
            'password' => $password,
            'active' => '1'
		);

		//make sure this user doesn't exist
		$this->db->from('users');
		$this->db->where('fb_uid',$query2['id']);
		$sql = $this->db->get()->result();
		if (is_array($sql)&&count($sql)==1){
			//User already exists.
			//Prevent manipulating details, but log the user in
			return 1;
		}else{
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
    
	function fb_post($event,$parameter){
		//post level ups and signups to Facebook timeline
		//Signup posting has not been implemented.
		//It can be done in the signup() function

		$uid = $this->session->userdata('fb_uid');

		if($uid=='' || $uid==NULL){
			return 0;
		}
		
		$token = NULL;

		//type can be level or signup.
		//level is used when posting level ups.

		//get access token to be used in the api
		try {
			$token = $this->facebook->getAccessToken();
			if(!$token) {
				log_message('error', 'could not get access_token for fb_post in user_model');
				return 0;
			}
		}catch (FacebookApiException $e){
			log_message('error', 'could not get access_token for fb_post in user_model, exception thrown');
			return 0;
		}
        if($event=='signup')
        {
            $post = array(
                'access_token'  => $token,
                'message' => '',
                'link' => 'http://conscientia.co.in'
                );
        }else
        {
           $post = array(
                'access_token'  => $token,
                'message' => '',
                'link' => 'http://conscientia.co.in'
                ); 
        }


		//posting is done using graph api, via CURL
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,'https://graph.facebook.com/' . $uid . '/feed');
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  //to suppress the curl output
		$result = curl_exec($ch);
		curl_close($ch);

		return;
	}
    
    
    
}