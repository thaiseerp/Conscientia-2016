<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*

Project Details
===============
author: Thaiseer Parammal
email: thaiseer.p@gmail.com
facebook: https://www.facebook.com/thaiseerparammal

*/

class Webbed extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth'));
        $this->load->model('webbed_admins_model');
    }

	public function index()
	{
        $this->session->set_flashdata('redirect_url', current_url());
		//Check if user is logged in
		if($this->ion_auth->logged_in()){
			//If logged in, arena page is shown. $this->load->model('user_model');
            $this->load->model('webbed_user_model');
            if($this->webbed_user_model->get_user())
            {
                $role = $this->webbed_user_model->get_role();
                if($role == -1)
                {
                    $this->load->view('pages/banned');
                }
                else
                {   //Load the level
                    $this->load->model('webbed_levels_model');
                    $level_details = $this->webbed_levels_model->get_level();

                    if($level_details)
                    {
                        $data['page'] = 'arena';
                        $data['level'] = $level_details;
                        $data['header_data'] = array('title' => $level_details->title);
                        $this->load->view('webbed/template', $data);
                    }
                    else
                    {
                        //User is in the highest level. Load wait view.
                        $data['page'] = 'wait';
                        $data['header_data'] = array('title' => 'Conscientia 2016 | Levels to be uploaded!');
                        $this->load->view('webbed/template',$data);
                    }
			    }
            }
            else
            {			
                //Load general home page, with details and register now button
                $data['page'] = 'home';
                $data['header_data'] = array('title' => 'Conscientia 2016 | Online Treasure Hunt');
                $this->load->view('webbed/template',$data);
		    }
	   }
       else
       {
           //Load general home page, with details and register now button
           $data['page'] = 'home';
           $data['header_data'] = array('title' => 'Conscientia 2016 | Online Treasure Hunt');
           $this->load->view('webbed/template',$data);
       }
    }
    
    public function register()
    {
        
        if($this->ion_auth->logged_in())
        {
            $this->load->model('ion_auth_model');
            $user_id = $this->session->userdata('user_id');
            $signed_up = $this->ion_auth_model->get_signed_up($user_id);
            if($signed_up->is_signedup==1)
            {
                $this->load->model('webbed_user_model');
                if($this->webbed_user_model->register())
                {
                    redirect('webbed', 'refresh');
                }
            }
            else
            {
                $this->session->keep_flashdata('redirect_url');
                redirect('signup', 'refresh');
            }
        }
        else
        {
            $this->session->keep_flashdata('redirect_url');
            redirect('login', 'refresh');
        }
    }

	public function answer(){
		//Function to verify answer
		//This works using both ajax, or direct post.
		$answer = $this->input->get_post('answer');
		$type = $this->input->get_post('type');
        
        $answer = preg_replace("/[^a-z]+/", "", $answer);
        
		$this->load->model('webbed_levels_model');
		$result = $this->webbed_levels_model->check_answer($answer);
		//Result is true or false, from model.

		$data['result'] = $result;
		$data['page'] = 'answer';
		$this->load->view('webbed/template', $data);
	}

	public function leaderboard(){
		$this->load->model('webbed_status_model');
		$leaderboard = $this->webbed_status_model->get_leaderboard();

		$data['page'] = 'leaderboard';
		$data['leaderboard'] = $leaderboard;
		$data['header_data'] = array('title' => 'Conscientia 2016 | Webbed Leaderboard');
		$this->load->view('webbed/template',$data);
	}

	public function rules(){
		$data['page'] = 'rules';
		$data['header_data'] = array('title' => 'Conscientia 2016 | Webbed Rules');
		$this->load->view('webbed/template',$data);
	}

	public function levels(){
		//controller to display level images safely.
		$file=$this->uri->segment(3, 0);

		//Send a Not Modified header if broswer requests it
		//This prevents reloading of images on each refresh
		//as pictures are served using php.
		if (file_exists('./contents/events/webbed/'.$file) && isset($_SERVER['HTTP_IF_MODIFIED_SINCE']))
		{
		    header('HTTP/1.0 304 Not Modified');
		    header("Cache-Control: max-age=12096000, public");
		    header("Expires: Sat, 26 Jul 2016 05:00:00 GMT");
		    header("Pragma: cache");
		    exit;
		}

		//only images starting with level_ and finish_ are used
		preg_match('/(?P<type>finish_|level_)(?P<level>[0-9]*)_?(.*)\.jpg/', $file, $read);
		
		if(!array_key_exists('level', $read)){
			header('HTTP/1.0 404 Not Found');
			redirect("oops404",'location');
			return;
		}

		if(!array_key_exists('type', $read)){
			header('HTTP/1.0 404 Not Found');
			redirect("oops404",'location');
			return;
		}

		$level = $read['level'];
		$type = $read['type'];

		$this->load->model('webbed_user_model');
		$current_level = $this->webbed_user_model->get_level();

		if($type=='finish_'){
			//finish image for the previous level is required
			//because user will have moved to the next level when answer is correct
			$current_level--;
		}

		if($current_level==$level){
			//show images only if current level is same as requested
			if(!file_exists('./contents/events/webbed/'.$file))
			{
				header('HTTP/1.0 404 Not Found');
				redirect("oops404",'location');
				return;
			}else{
				//serve image with appropriate headers
				header("Content-type: image/jpeg");
				header("Cache-Control: max-age=12096000, public");
				header("Expires: Sat, 26 Jul 2016 05:00:00 GMT");
				header("Pragma: cache");
				echo file_get_contents('contents/events/webbed/'.$file);
			}
		}else{
			//visitor is trying to view levels other than current level
			//show forbidden page
			header('HTTP/1.0 403 Forbidden');
			redirect("oops403",'location');
			return;
		}

	}

}