<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*

Project Details
===============
author: Thaiseer Parammal
email: thaiseer.p@gmail.com
facebook: https://www.facebook.com/thaiseerparammal

*/

class Mathematrix extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth'));
        $this->load->helper(array('url','language'));
       		
    }

	public function index()
	{
        $this->session->set_flashdata('redirect_url', current_url());
		//Check if user is logged in
		if($this->ion_auth->logged_in()){
			//If logged in, arena page is shown.
            $this->load->model('math_user_model');
            if($this->math_user_model->get_user())
            {
                $role = $this->math_user_model->get_role();
                if($role == -1)
                {
                    $this->load->view('pages/banned');
                }
                else
                {
                   $data['page'] = 'arena';
                   $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                   $this->load->view('math/template', $data);
                }
            }
            else
            {
                // Show Home Page.
                $data['page'] = 'home';
			    $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
			    $this->load->view('math/template',$data);
            }
		}
        else
        {
            //Load general home page, with details and log-in button
			$data['page'] = 'home';
			$data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
			$this->load->view('math/template',$data);
		}
	}
    
    public function question($question=NULL)
    {
        $this->session->set_flashdata('redirect_url', current_url());
        if($this->ion_auth->logged_in())
        {
            $this->load->model('math_user_model');
            if($this->math_user_model->get_user())
            {
                
                $role = $this->math_user_model->get_role();
                if($role == -1)
                {
                    $this->load->view('pages/banned');
                }
                else if($question)
                {
                    $question = preg_replace('/\D/', '', $question);
                    $this->load->model('math_levels_model');
                    if($this->math_levels_model->get_attempts($question)>2)
                    $question = 11;
                    switch ($question) {
                        case '1':
                            $data['page'] = '1';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '2':
                            $data['page'] = '2';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '3':
                            $data['page'] = '3';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '4':
                            $data['page'] = '4';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '5':
                            $data['page'] = '5';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '6':
                            $data['page'] = '6';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '7':
                            $data['page'] = '7';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '8':
                            $data['page'] = '8';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '9':
                            $data['page'] = '9';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '10':
                            $data['page'] = '10';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        case '11':
                            $data['page'] = 'done';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                        
                        default:
                            $data['page'] = 'arena';
                            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                            $this->load->view('math/template',$data);
                            break;
                    }
                }
                else
                {
                   $data['page'] = 'arena';
                   $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
                   $this->load->view('math/template',$data); 
                }
            }
            else
            {
                 // Show Home Page.
                $data['page'] = 'home';
			    $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
			    $this->load->view('math/template',$data);
            }
        }
        else
        {
            $data['page'] = 'home';
			$data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
			$this->load->view('math/template',$data);
        }
    }
    
    public function answer()
    {
        $answer = $this->input->get_post('answer');
        $level = $this->input->get_post('level');
        if(isset($answer) && isset($level))
        {
            $answer = preg_replace('/\D/', '', $answer);
            $level = preg_replace('/\D/', '', $level);
            $this->load->model('math_levels_model');
            $result = $this->math_levels_model->check_answer($answer,$level);
            
            $data['result'] = $result;
            $data['level'] = $level;
            $data['page'] = 'answer';
            $data['header_data'] = array('title' => 'Conscientia 2016 | Mathematrix');
            $this->load->view('math/template',$data);
        }
        else
        {
            redirect('mathematrix/question', 'refresh');
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
                $this->load->model('math_user_model');
                if($this->math_user_model->register())
                {
                    redirect('mathematrix', 'refresh');
                }
            }
            else
            {
                redirect('signup', 'refresh');
            }
        }
        else
        {
            redirect('login', 'refresh');
        }
    }

	public function leaderboard(){
		$this->load->model('math_status_model');
		$leaderboard = $this->math_status_model->get_leaderboard();

		$data['page'] = 'leaderboard';
		$data['leaderboard'] = $leaderboard;
		$data['header_data'] = array('title' => 'Leaderboard');
		$this->load->view('math/template',$data);
	}

	public function rules(){
		$data['page'] = 'rules';
		$data['header_data'] = array('title' => 'Rules');
		$this->load->view('math/template',$data);
	}

}