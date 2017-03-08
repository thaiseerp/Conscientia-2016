<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workshops extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->load->model('events_model');
		$this->lang->load('auth');

    }
    
	public function index()
	{

        $this->load->view('pages/workshops');
        
	}
    
    public function spheredrone()
    {
            
            $workshop_name = 'spheredrone';
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                $this->events_model->register_workshop($workshop_name);
                redirect('workshops', 'refresh');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        
            $this->load->view('pages/workshops');
    }
    
    public function swarmrobotics($workshop_id=NULL)
    {
            $workshop_name = 'swarmrobotics';
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                $this->events_model->register_workshop($workshop_name);
                redirect('workshops', 'refresh');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        
            $this->load->view('pages/workshops');
    }
    
    public function gamedevelopment($workshop_id=NULL)
    {
            $workshop_name = 'gamedevelopment';
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                $this->events_model->register_workshop($workshop_name);
                redirect('workshops', 'refresh');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        
            $this->load->view('pages/workshops');
    }

    public function mindrobotics()
    {
            $workshop_name = 'mindrobotics';
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                $this->events_model->register_workshop($workshop_name);
                redirect('workshops', 'refresh');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        
            $this->load->view('pages/workshops');
    }
    
    public function motorbike()
    {
            $workshop_name = 'motorbike';
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                $this->events_model->register_workshop($workshop_name);
                redirect('workshops', 'refresh');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        
            $this->load->view('pages/workshops');
    }




}