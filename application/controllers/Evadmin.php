<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Evadmin extends CI_Controller {

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
            if($this->ion_auth->is_evadmin())
            {
                $this->load->view('pages/evadmin/home');
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
    
    function botintheact()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_evadmin())
            {
                $botsup = $this->admins_model->getregistration('botsup');
                $linefollower = $this->admins_model->getregistration('linefollower');
                $salilsthalchar = $this->admins_model->getregistration('salilsthalchar');
                
                $data['botsup'] = $botsup;
                $data['linefollower'] = $linefollower;
                $data['salilsthalchar'] = $salilsthalchar;
                
                $this->load->view('pages/evadmin/botintheact',$data);
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
    
    function aparimit()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_evadmin())
            {
                $cosmicclash = $this->admins_model->getregistration('cosmicclash');
                $astroreflections = $this->admins_model->getregistration('astroreflections');
                $nightskyhunt = $this->admins_model->getregistration('nightskyhunt');
                $astroabc = $this->admins_model->getregistration('astroabc');
                
                $data['cosmicclash'] = $cosmicclash;
                $data['astroreflections'] = $astroreflections;
                $data['nightskyhunt'] = $nightskyhunt;
                $data['astroabc'] = $astroabc;
                
                $this->load->view('pages/evadmin/aparimit',$data);
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
    
    function mechamorphosis()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_evadmin())
            {
                $junkyardwars = $this->admins_model->getregistration('junkyardwars');
                $machinist = $this->admins_model->getregistration('machinist');
                $screwed = $this->admins_model->getregistration('screwed');
                $bridgeup = $this->admins_model->getregistration('bridgeup');
                $contraptions = $this->admins_model->getregistration('contraptions');
                $caddraw = $this->admins_model->getregistration('caddraw');
                $hydranoid = $this->admins_model->getregistration('hydranoid');
                
                $data['junkyardwars'] = $junkyardwars;
                $data['machinist'] = $machinist;
                $data['screwed'] = $screwed;
                $data['bridgeup'] = $bridgeup;
                $data['contraptions'] = $contraptions;
                $data['caddraw'] = $caddraw;
                $data['hydranoid'] = $hydranoid;
                
                $this->load->view('pages/evadmin/mechamorphosis',$data);
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
    
    function paripath()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_evadmin())
            {
                $lcd = $this->admins_model->getregistration('lcd');
                $circuiter = $this->admins_model->getregistration('circuiter');
                $electromania = $this->admins_model->getregistration('electromania');
                $tarang = $this->admins_model->getregistration('tarang');
                
                $data['lcd'] = $lcd;
                $data['circuiter'] = $circuiter;
                $data['electromania'] = $electromania;
                $data['tarang'] = $tarang;
                
                $this->load->view('pages/evadmin/paripath',$data);
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
    
    function vihang()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_evadmin())
            {
                $airstrike = $this->admins_model->getregistration('airstrike');
                $techflight = $this->admins_model->getregistration('techflight');
                $prakshepan = $this->admins_model->getregistration('prakshepan');
                $airglide = $this->admins_model->getregistration('airglide');
                
                $data['airstrike'] = $airstrike;
                $data['techflight'] = $techflight;
                $data['prakshepan'] = $prakshepan;
                $data['airglide'] = $airglide;
                
                $this->load->view('pages/evadmin/vihang',$data);
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
    
    function kaleidoscope()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_evadmin())
            {
                $ricerca = $this->admins_model->getregistration('ricerca');
                $blackbox = $this->admins_model->getregistration('blackbox');
                $techwiz = $this->admins_model->getregistration('techwiz');
                $alphageek = $this->admins_model->getregistration('alphageek');
                $bletchleypark = $this->admins_model->getregistration('bletchleypark');
                $mathquiz = $this->admins_model->getregistration('mathquiz');
                
                $data['ricerca'] = $ricerca;
                $data['blackbox'] = $blackbox;
                $data['techwiz'] = $techwiz;
                $data['alphageek'] = $alphageek;
                $data['bletchleypark'] = $bletchleypark;
                $data['mathquiz'] = $mathquiz;
                
                $this->load->view('pages/evadmin/aparimit',$data);
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
    
    function philosophiaenaturalis()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_evadmin())
            {
                $panchmantra = $this->admins_model->getregistration('panchmantra');
                $imagein = $this->admins_model->getregistration('imagein');
                $howadamdidit = $this->admins_model->getregistration('howadamdidit');
                $phyknight = $this->admins_model->getregistration('phyknight');
                $simphy = $this->admins_model->getregistration('simphy');
                
                $data['panchmantra'] = $panchmantra;
                $data['imagein'] = $imagein;
                $data['howadamdidit'] = $howadamdidit;
                $data['phyknight'] = $phyknight;
                $data['simphy'] = $simphy;
                
                $this->load->view('pages/evadmin/philosophiaenaturalis',$data);
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
    
/*    function cyberia()
    {
        if($this->ion_auth->logged_in())
        {
            if($this->ion_auth->is_evadmin())
            {
                $this->load->view('pages/evadmin/cyberia');
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
        
    }*/
    
}
    
    