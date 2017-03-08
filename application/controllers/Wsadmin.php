<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wsadmin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
        $this->load->model('admins_model');
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
        
    }
    
    function index()
    {
        $this->session->set_flashdata('redirect_url', current_url());
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_wsadmin())
            {
                $this->load->view('pages/wsadmin/home');
            }
            else
            {
                redirect('oops403', 'refresh');
            }
        }
        else
        {
            redirect('login', 'refresh');
        }
        
    }
    
    function spheredrone()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_wsadmin())
            {
                $spheredrone = $this->admins_model->getwsregistration('spheredrone');
                
                $data['spheredrone'] = $spheredrone;
                
                $this->load->view('pages/wsadmin/spheredrone',$data);
            }
            else
            {
                redirect('oops403', 'refresh');
            }
        }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function swarmrobotics()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_wsadmin())
            {
                $swarmrobotics = $this->admins_model->getwsregistration('swarmrobotics');
                $data['swarmrobotics'] = $swarmrobotics;
                
                $this->load->view('pages/wsadmin/swarmrobotics',$data);
            }
            else
            {
                redirect('oops403', 'refresh');
            }
        }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function mindrobotics()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_wsadmin())
            {
                $mindrobotics = $this->admins_model->getwsregistration('mindrobotics');
                $data['mindrobotics'] = $mindrobotics;
                
                $this->load->view('pages/wsadmin/mindrobotics',$data);
            }
            else
            {
                redirect('oops403', 'refresh');
            }
        }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function gamedevelopment()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_wsadmin())
            {
                $gamedevelopment = $this->admins_model->getwsregistration('gamedevelopment');
                $data['gamedevelopment'] = $gamedevelopment;
                
                $this->load->view('pages/wsadmin/gamedevelopment',$data);
            }
            else
            {
                redirect('oops403', 'refresh');
            }
        }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function motorbike()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_wsadmin())
            {
                $motorbike = $this->admins_model->getwsregistration('motorbike');
                $data['motorbike'] = $motorbike;
                
                $this->load->view('pages/wsadmin/motorbike',$data);
            }
            else
            {
                redirect('oops403', 'refresh');
            }
        }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
}
    
    