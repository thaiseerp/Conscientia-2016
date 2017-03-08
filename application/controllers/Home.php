<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
        $this->load->model('g_model');
    }
    
	public function index()
	{
        $this->load->view('pages/home');
	}
    
    public function about_us()
    {
        $this->load->view('pages/about_us');
    }
    
    public function expo()
    {
        $this->load->view('pages/expo');
    }
    
    public function team()
    {
        $this->load->view('pages/team');
    }
    
    public function sponsors()
    {
        $this->load->view('pages/sponsors');
    }
    
    public function schedule()
    {
        $this->load->view('pages/timeline');
    }
    
	function register_email()
    {

        $tables = $this->config->item('tables','ion_auth');
        $identity_column = $this->config->item('identity','ion_auth');
        $this->data['identity_column'] = $identity_column;
        
        $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');
                
        if ($this->form_validation->run() == true)
        {
            $email    = strtolower($this->input->post('email'));
            $password = $this->input->post('password');
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register_email($email,$password))
        {
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            $this->load->view('pages/registration_success');
        }
        else
        {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
	        $this->data['email'] = array(
                'name'  => 'email',
                'id'    => 'email',
                'type'  => 'email',
                'class' => 'textbox1',
                'placeholder' => 'Your email',
                'required' => '',
                'value' => $this->form_validation->set_value('email'),
            );
            $this->data['password'] = array(
                'name'  => 'password',
                'id'    => 'password',
                'type'  => 'password',
                'class' => 'textbox2',
                'placeholder' => 'Password',
                'required' => '',                
                'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array(
                'name'  => 'password_confirm',
                'id'    => 'password_confirm',
                'type'  => 'password',
                'class' => 'textbox2',
                'placeholder' => 'Confirm Password',
                'required' => '',  
                'value' => $this->form_validation->set_value('password_confirm'),
            );

            $this->load->view('pages/register',$this->data);
        }
    }
    
	// activate the user
	function activate($id = NULL, $code=NULL)
	{
		if ($id !== NULL && $code !== NULL)
		{
			$activation = $this->ion_auth->activate($id, $code);
            if ($activation)
            {
                // redirect them to the signup page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect("signup", 'refresh');
            }
            else
            {
                // redirect them to the email error page
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                $this->load->view('pages/activation_failed');
            }
		}
        else
        {
            // redirect them to the email error page
            $this->session->set_flashdata('message', $this->ion_auth->errors());
            redirect("/", 'refresh');
        }


	}

	function login() {
        //validate form input
		$this->form_validation->set_rules('identity', 'Identity', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{
			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), TRUE))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', $this->ion_auth->messages());

                if($this->ion_auth->get_signedup($this->session->userdata('user_id')))         
                redirect($this->session->flashdata('redirect_url'));
                else
                $this->session->keep_flashdata('redirect_url');
                redirect('signup', 'refresh');
			}
			else
			{
				// if the login was un-successful
				// redirect them back to the login page
                $this->session->keep_flashdata('redirect_url');
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			// the user is not logging in so display the login page
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array(
                'name' => 'identity',
				'id'    => 'identity',
				'type'  => 'email',
                'class' => 'textbox1',
                'placeholder' => 'Email address',
                'required' => '',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array(
                'name' => 'password',
                'class' => 'textbox2',
				'id'   => 'password',
                'placeholder' => 'Password',
				'type' => 'password',
			);

		}
        
		$this->load->view('pages/login',$this->data);
	}
    
	public function fblogin() {
        $this->session->keep_flashdata('redirect_url');
        if ($this->ion_auth->logged_in())
        $this->ion_auth->logout();
		
        //handles login
		$this->load->model('fb_model');
		$result = $this->fb_model->get_user();

		if ($result['is_true']) {
			//user has logged in to Facebook

			//Check if it's a returning user or just signed up
			$login_type = $this->fb_model->signed_in();		
			if($login_type == "signup"){
				//first timer. let the user fill out details
                // Add User to Ion Auth Database
				if($this->fb_model->signup())
                {
                    $details = $this->fb_model->get_user_details();
                    if ($this->ion_auth->login($details['fb_uid'].'@facebook.com', 'nofbpassword', TRUE))
                    {
                        //if the login is successful
                        //redirect them back to the Sign up Page
                        
                        //Post In Users Fb Feed if permission granted by the user !!
                        //$this->fb_model->fb_post('signup','nothing');
                        
                        $this->session->keep_flashdata('redirect_url');
                        redirect(base_url().'fbsignup', 'refresh');
                    }else
                    {
                        redirect(base_url().'login', 'location');
                    }
                }
			}else if($login_type == "signin"){

				//sign in the user, and set session values
				$details = $this->fb_model->get_user_details();

                if ($this->ion_auth->login($details['fb_uid'].'@facebook.com', 'Use some random password here which should be saved in database agianst user email/fb_uid', TRUE))
                {
                    //if the login is successful
                    //redirect them back to the home page

                    if($this->ion_auth->get_signedup($this->session->userdata('user_id')))         
                    redirect($this->session->flashdata('redirect_url'));
                    else
                    $this->session->keep_flashdata('redirect_url');
                    redirect(base_url().'fbsignup', 'refresh');
                }
                
				redirect(base_url().'login', 'location');
			}else{
				//0 was returned. could be some error with Facebook API
				//return to home page, and let the user try logging in again, after logging out
				$this->ion_auth->logout();
			}
		}else{
			//redirect to Facebook to authenticate
			redirect($this->facebook->getLoginURL($this->config->item('facebook_login_parameters'), 'location'));
		}
	}
    
    public function glogin()
    {
        $this->session->keep_flashdata('redirect_url');
        
        if ($this->ion_auth->logged_in())
        $this->ion_auth->logout();
        
        include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
		include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
		
		// Google Project API Credentials
		// Provide your google API credentials here.
		$clientId = '';
        $clientSecret = '';
        $redirectUrl = base_url() . 'glogin';
        
        $gClient = new Google_Client();
        $gClient->setApplicationName('Conscientia 2016');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $google_oauthV2 = new Google_Oauth2Service($gClient);
        
        if (isset($_REQUEST['code'])) {
            $gClient->authenticate();
            $this->session->set_userdata('token', $gClient->getAccessToken());
            redirect($redirectUrl);
        }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }
        
        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            // Preparing data for database insertion
			$userData['g_uid'] = $userProfile['id'];
            $userData['email'] = $userProfile['email'];
			// Insert or update user data
            $userID = $this->g_model->checkUser($userData);
            if($userID)
            {
                if ($this->ion_auth->login($userData['email'], 'Use some random password here which should be saved in database agianst user email', TRUE))
                {
                    //if the login is successful
                    //redirect them back to the home page

                    if($this->ion_auth->get_signedup($this->session->userdata('user_id')))         
                    redirect($this->session->flashdata('redirect_url'));
                    else
                    $this->session->keep_flashdata('redirect_url');
                    redirect(base_url().'signup', 'refresh');
                }
                // something went wrong redirect them to login page
				redirect(base_url().'login', 'location');
            }
            else
            {
                redirect(base_url().'login', 'location');
            }
        }
        else
        {
            redirect($gClient->createAuthUrl(), 'location');
        }
    }

	function logout()
	{
		$data['header_data'] = array('title' => 'Logout');

		// log the user out
		$logout = $this->ion_auth->logout();

		// redirect them to the login page
		$this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect($this->session->flashdata('redirect_url'), 'refresh');
	}
    
	// forgot password
	function forgot_password()
	{
		// setting validation rules for identily (Here it is email)
        $this->form_validation->set_rules('identity', $this->lang->line('forgot_password_validation_email_label'), 'required|valid_email');

		if ($this->form_validation->run() == false)
		{
			$this->data['type'] = $this->config->item('identity','ion_auth');
			// setup the input
            $this->data['identity'] = array(
                'name' => 'identity',
                'type' => 'email',
                'class' => 'textbox1',
				'id' => 'identity',
                'placeholder' => 'Email address',
                'required' => '',
			);

			// set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->load->view('pages/forgot_password',$this->data);
		}
		else
		{
			$identity = $this->ion_auth->where('email', $this->input->post('identity'))->users()->row();

			if(empty($identity))
            {
                $this->ion_auth->set_error('forgot_password_email_not_found');
		        $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect("forgot_password", 'refresh');
            }

			// run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

			if ($forgotten)
			{
				// if there were no errors
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				$this->load->view('pages/password_change_started'); //we should display a confirmation page here instead of the login page
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("forgot_password", 'refresh');
			}
		}
	}
    
	// reset password - final step for forgotten password
	public function reset_password($code = NULL)
	{
		if (!$code)
		{
			show_404();
		}

		$user = $this->ion_auth->forgotten_password_check($code);

		if ($user)
		{
			// if the code is valid then display the password reset form

			$this->form_validation->set_rules('new', $this->lang->line('reset_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
			$this->form_validation->set_rules('new_confirm', $this->lang->line('reset_password_validation_new_password_confirm_label'), 'required');

			if ($this->form_validation->run() == false)
			{
				// display the form

				// set the flash data error message if there is one
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

				$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
				$this->data['new_password'] = array(
                    'name' => 'new',
					'id'   => 'new',
                    'class' => 'textbox1',
					'type' => 'password',
                    'placeholder' => 'New Password',
                    'required' => '',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['new_password_confirm'] = array(
                    'name'    => 'new_confirm',
					'id'      => 'new_confirm',
                    'class' => 'textbox2',
					'type'    => 'password',
                    'placeholder' => 'Confirm New Password',
                    'required' => '',
					'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
				);
				$this->data['user_id'] = array(
					'name'  => 'user_id',
					'id'    => 'user_id',
					'type'  => 'hidden',
					'value' => $user->id,
				);
				$this->data['csrf'] = $this->_get_csrf_nonce();
				$this->data['code'] = $code;

				// render
                $this->load->view('pages/reset_password',$this->data);
			}
			else
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post('user_id'))
				{

					// something fishy might be up
					$this->ion_auth->clear_forgotten_password_code($code);

					show_error($this->lang->line('error_csrf'));

				}
				else
				{
					// finally change the password
					$identity = $user->{$this->config->item('identity', 'ion_auth')};

					$change = $this->ion_auth->reset_password($identity, $this->input->post('new'));

					if ($change)
					{
						// if the password was successfully changed
						$this->session->set_flashdata('message', $this->ion_auth->messages());
						redirect("login", 'refresh');
					}
					else
					{
						$this->session->set_flashdata('message', $this->ion_auth->errors());
						redirect('reset_password/' . $code, 'refresh');
					}
				}
			}
		}
		else
		{
			// if the code is invalid then send them back to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			$this->load->view('pages/password_change_failed');
		}
	}
    
	function signup()
    {
        if($this->ion_auth->logged_in() && !$this->ion_auth->get_signedup($this->session->userdata('user_id'))) {

        $tables = $this->config->item('tables','ion_auth');
        $identity_column = $this->config->item('identity','ion_auth');
        $this->data['identity_column'] = $identity_column;

        // validate form input
        $this->form_validation->set_rules('user_name', $this->lang->line('create_user_validation_user_name_label'), 'trim|required|min_length[4]|max_length[30]|alpha_numeric_spaces');
        $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim|required|exact_length[10]|numeric');
        $this->form_validation->set_rules('college', $this->lang->line('create_user_validation_college_label'), 'trim|required|min_length[3]|alpha_numeric_spaces');
        $this->form_validation->set_rules('student_id', $this->lang->line('create_user_validation_student_id_label'), 'trim|required|min_length[3]|max_length[15]|alpha_numeric');
        $this->form_validation->set_rules('gender', $this->lang->line('create_user_validation_gender_label'), 'required|alpha');
        $this->form_validation->set_rules('accomodation', $this->lang->line('create_user_validation_gender_label'), 'numeric|exact_length[1]');
        
        if ($this->form_validation->run() == true)
        {
            $user_id = $this->session->userdata('user_id');
            $details = array(
                'name' => strip_tags($this->input->post('user_name',TRUE)),
                'phone'  => strip_tags($this->input->post('phone',TRUE)),
                'college'    => strip_tags($this->input->post('college',TRUE)),
                'student_id'      => strip_tags($this->input->post('student_id',TRUE)),
                'gender'      => strip_tags($this->input->post('gender',TRUE)),
                'accomodation'      => strip_tags($this->input->post('accomodation',TRUE)),
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register_user($user_id,$details))
        {
            // check to see if we are creating the user
            // redirect them back to the admin page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect($this->session->flashdata('redirect_url'), 'refresh');
        }
        else
        {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['user_name'] = array(
                'name'  => 'user_name',
                'id'    => 'q1',
                'type'  => 'text',
                'placeholder' => 'Your name',
                'value' => $this->form_validation->set_value('user_name'),
                'class' => 'fs-anim-lower',
                'required' => '',
            );
            $this->data['phone'] = array(
                'name'  => 'phone',
                'id'    => 'q1',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('phone'),
                'placeholder' => 'XXXXXXXXXX',
                'maxlength' => '10',
                'required' => '',
                'class' => 'fs-anim-lower',
                'onkeypress' => 'return isNumberKey(event)',
            );
            $this->data['college'] = array(
                'name'  => 'college',
                'class' => 'fs-anim-lower',
                'id'    => 'q1',
                'type'  => 'text',
                'placeholder' => 'Your college',
                'value' => $this->form_validation->set_value('college'),
                'required' => '',
            );
            $this->data['student_id'] = array(
                'name'  => 'student_id',
                'id' => 'q1',
                'class' => 'fs-anim-lower',
                'placeholder' => 'Student ID',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('student_id'),
                'required' => '',
            );
            
            $this->session->keep_flashdata('redirect_url');
            $this->load->view('pages/signup',$this->data);
        }
        }else {
            redirect('login', 'refresh');
        }
    }
    
	function fbsignup()
    {
        if($this->ion_auth->logged_in() && !$this->ion_auth->get_signedup($this->session->userdata('user_id'))) {

        $tables = $this->config->item('tables','ion_auth');
        $identity_column = $this->config->item('identity','ion_auth');
        $this->data['identity_column'] = $identity_column;

        // validate form input
        $this->form_validation->set_rules('user_name', $this->lang->line('create_user_validation_user_name_label'), 'trim|required|min_length[4]|max_length[30]|alpha_numeric_spaces');
        $this->form_validation->set_rules('user_email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique[' . $tables['users'] . '.email]');
        $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim|required|exact_length[10]|numeric');
        $this->form_validation->set_rules('college', $this->lang->line('create_user_validation_college_label'), 'trim|required|min_length[3]|alpha_numeric_spaces');
        $this->form_validation->set_rules('student_id', $this->lang->line('create_user_validation_student_id_label'), 'trim|required|min_length[3]|max_length[15]|alpha_numeric');
        $this->form_validation->set_rules('gender', $this->lang->line('create_user_validation_gender_label'), 'required|alpha');
        $this->form_validation->set_rules('accomodation', $this->lang->line('create_user_validation_gender_label'), 'numeric|exact_length[1]');
        
        if ($this->form_validation->run() == true)
        {
            $user_id = $this->session->userdata('user_id');
            $details = array(
                'name' => strip_tags($this->input->post('user_name',TRUE)),
                'user_email' => strip_tags($this->input->post('user_email',TRUE)),
                'phone'  => strip_tags($this->input->post('phone',TRUE)),
                'college'    => strip_tags($this->input->post('college',TRUE)),
                'student_id'      => strip_tags($this->input->post('student_id',TRUE)),
                'gender'      => strip_tags($this->input->post('gender',TRUE)),
                'accomodation'      => strip_tags($this->input->post('accomodation',TRUE)),
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register_user($user_id,$details))
        {
            // check to see if we are creating the user
            // redirect them back to the admin page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect($this->session->flashdata('redirect_url'), 'refresh');
        }
        else
        {
            // display the create user form
            // set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
            
            
            $this->data['user_name'] = array(
                'name'  => 'user_name',
                'id'    => 'q1',
                'type'  => 'text',
                'placeholder' => 'Your name',
                'value' => $this->form_validation->set_value('user_name'),
                'class' => 'fs-anim-lower',
                'required' => '',
            );
            $this->data['user_email'] = array(
                'name'  => 'user_email',
                'id'    => 'q2',
                'type'  => 'email',
                'value' => $this->form_validation->set_value('user_email'),
                'class' => 'fs-anim-lower',
                'placeholder' => 'support@conscient.co.in',
                'required' => '',
            );
            $this->data['phone'] = array(
                'name'  => 'phone',
                'id'    => 'q1',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('phone'),
                'placeholder' => 'XXXXXXXXXX',
                'maxlength' => '10',
                'required' => '',
                'class' => 'fs-anim-lower',
                'onkeypress' => 'return isNumberKey(event)',
            );
            $this->data['college'] = array(
                'name'  => 'college',
                'class' => 'fs-anim-lower',
                'id'    => 'q1',
                'type'  => 'text',
                'placeholder' => 'Your college',
                'value' => $this->form_validation->set_value('college'),
                'required' => '',
            );
            $this->data['student_id'] = array(
                'name'  => 'student_id',
                'id' => 'q1',
                'class' => 'fs-anim-lower',
                'placeholder' => 'Student ID',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('student_id'),
                'required' => '',
            );
            
            $this->session->keep_flashdata('redirect_url');
            $this->load->view('pages/fbsignup',$this->data);
        }
        }else {
            redirect('login', 'refresh');
        }
    }
    
    public function accommodation()
    {
        if($this->ion_auth->logged_in())
        {
            $this->load->model('acco_model');
            if($this->acco_model->acco_required())
            {
                $this->form_validation->set_rules('date', 'date', 'required|isdate|max_length[16]|min_length[16]');
                $this->form_validation->set_message('isdate', 'Invalid Date / Time');
                $date    = strtolower($this->input->post('date'));
                if ($this->form_validation->run() == true && $this->acco_model->register_date($date))
                {
                    $this->load->view('pages/acco_success');
                }
                else
                {
                    // display the create user form
                    // set the flash data error message if there is one
                    $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
                    $this->data['date'] = array(
                        'name'  => 'date',
                        'id'    => 'datepicker',
                        'type'  => 'text',
                        'class' => 'date',
                        'placeholder' => '17.03.2016 17.00 hrs',
                        'maxlength' => '16',
                        'required' => '',
                        'value' => $this->form_validation->set_value('date'),
                    );
                $this->load->view('pages/accommodation',$this->data);
                }
            }
            else
            {
                redirect(base_url(), 'refresh');
            }
        }
        else
        {
            redirect(base_url(), 'refresh');
        }
        
    }
    
	function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key   = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}
    
	function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
			$this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
    

}
