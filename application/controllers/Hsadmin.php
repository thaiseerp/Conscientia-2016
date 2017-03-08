<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hsadmin extends CI_Controller {

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
            if($this->ion_auth->is_hsadmin())
            {
                $acco_details = $this->admins_model->getwsregistration('acco_details');
                $data['acco_details'] = $acco_details;
                $this->load->view('pages/hsadmin/home',$data);
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
    
    