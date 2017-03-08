<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

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

        $this->load->view('pages/events/events');
        
	}
    
    public function aparimit($event_id=NULL)
    {
        if($event_id)
        {
            // Filter event_id and get event name
            $event_id = preg_replace('/\D/', '', $event_id);
            
            $event_name = $this->events_model->get_event_name($event_id);
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                if($event_name)
                $this->events_model->register_event($event_name);
                $this->load->view('pages/register_success');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        }
        else{
            $this->load->view('pages/events/aparimit');
        }
    }
    
    public function botintheact($event_id=NULL)
    {
        if($event_id)
        {
            // Filter event_id and get event name
            $event_id = preg_replace('/\D/', '', $event_id);
            
            $event_name = $this->events_model->get_event_name($event_id);
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                if($event_name)
                $this->events_model->register_event($event_name);
                $this->load->view('pages/register_success');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        }
        else{
            $this->load->view('pages/events/botintheact');
        }
    }
    
    public function cyberia($event_id=NULL)
    {
        if($event_id)
        {
            // Filter event_id and get event name
            $event_id = preg_replace('/\D/', '', $event_id);
            
            $event_name = $this->events_model->get_event_name($event_id);
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                if($event_name)
                $this->events_model->register_event($event_name);
                $this->load->view('pages/register_success');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        }
        else{
            $this->load->view('pages/events/cyberia');
        }
    }

    public function kaleidoscope($event_id=NULL)
    {
        if($event_id)
        {
            // Filter event_id and get event name
            $event_id = preg_replace('/\D/', '', $event_id);
            
            $event_name = $this->events_model->get_event_name($event_id);
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                if($event_name)
                $this->events_model->register_event($event_name);
                $this->load->view('pages/register_success');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        }
        else{
            $this->load->view('pages/events/kaleidoscope');
        }
    }
    
    public function mechamorphosis($event_id=NULL)
    {
        if($event_id)
        {
            // Filter event_id and get event name
            $event_id = preg_replace('/\D/', '', $event_id);
            
            $event_name = $this->events_model->get_event_name($event_id);
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                if($event_name)
                $this->events_model->register_event($event_name);
                $this->load->view('pages/register_success');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        }
        else{
            $this->load->view('pages/events/mechamorphosis');
        }
    }
    
    public function paripath($event_id=NULL)
    {
        if($event_id)
        {
            // Filter event_id and get event name
            $event_id = preg_replace('/\D/', '', $event_id);
            
            $event_name = $this->events_model->get_event_name($event_id);
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                if($event_name)
                $this->events_model->register_event($event_name);
                $this->load->view('pages/register_success');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        }
        else{
            $this->load->view('pages/events/paripath');
        }
    }
    
    public function philosophiaenaturalis($event_id=NULL)
    {
        if($event_id)
        {
            // Filter event_id and get event name
            $event_id = preg_replace('/\D/', '', $event_id);
            
            $event_name = $this->events_model->get_event_name($event_id);
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                if($event_name)
                $this->events_model->register_event($event_name);
                $this->load->view('pages/register_success');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        }
        else{
            $this->load->view('pages/events/philosophiaenaturalis');
        }
    }

    public function vihang($event_id=NULL)
    {
        if($event_id)
        {
            // Filter event_id and get event name
            $event_id = preg_replace('/\D/', '', $event_id);
            
            $event_name = $this->events_model->get_event_name($event_id);
            
            // Register for event
            if($this->ion_auth->logged_in() && $this->ion_auth->get_signedup($this->session->userdata('user_id')))
            {
                if($event_name)
                $this->events_model->register_event($event_name);
                $this->load->view('pages/register_success');
            }
            else
            {
                $this->ion_auth->logout();
                redirect('login', 'refresh');
            }
            
        }
        else{
            $this->load->view('pages/events/vihang');
        }
    }
    
    public function gaming()
    {
        $this->load->view('pages/events/gaming');
    }




}