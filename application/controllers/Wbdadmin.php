<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wbdadmin extends CI_Controller {

	function __construct() {
		parent::__construct();
        
        $this->load->library(array('ion_auth','form_validation'));       

		//admin controller
		if(!$this->ion_auth->logged_in())
        {
            redirect('login','location');
        }
        if(!$this->ion_auth->is_admin()){
			redirect('webbed','location');
		}
	}

	public function index()
	{
		//show basic statistics
		$this->load->model('webbed_admins_model');
		$stats = $this->webbed_admins_model->get_stats();

		$data['details'] = $stats;
		$data['page'] = 'wbdadmin/home';
		$data['header_data'] = array('title' => 'Webbed Admin Panel');
		$this->load->view('webbed/template', $data);	
	}

	public function levels(){
		//read uri segments, and call appropriate functions
		$page_type = $this->uri->segment(3, 0);

		if($page_type==="add_level"){

			if($this->input->post('add_level')!='true'){	
				$data['page'] = 'wbdadmin/add_level';
				$data['header_data'] = array('title' => 'Add Level - Webbed');
				$this->load->view('webbed/template', $data);
				return;	
			}

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('answer', 'Answer', 'required');
			$this->form_validation->set_rules('level', 'Level', 'required|numeric');

			if ($this->form_validation->run() == FALSE)
			{
				$data['page'] = 'wbdadmin/add_level';
				$data['header_data'] = array('title' => 'Add Level - Webbed');
				$this->load->view('webbed/template', $data);
				return;
			}

			//now, everything is okay. upload images, if selected, and add to database.

			$level = $this->input->post('level');
			$this->load->library('upload');

			$img_level = 0;
			$img_finish = 0;

			if (!empty($_FILES['content_image']['name'])) {
				$level_config = array(
					'upload_path' => './contents/events/webbed/',
					'allowed_types' => 'jpg',
					'max_size' => '1024',
					'max_width' => '1000',
					'max_height' => '1000',
					'file_name' => 'level_'.$level.'.jpg',
					'overwrite' => TRUE
					);

				$this->upload->initialize($level_config);

				if (!$this->upload->do_upload('content_image') ){
					$error = $this->upload->display_errors();

					$data['page'] = 'wbdadmin/add_level';
					$data['header_data'] = array('title' => 'Add Level - Webbed');
					$data['upload_error']= '<strong>Level Image:</strong>'.$error;
					$this->load->view('webbed/template', $data);
					return;

				}else{
					$data = array('upload_data' => $this->upload->data());
					$img_data = $this->upload->data();
					$img_level = $img_data['orig_name'];
				}
			}//end upload code for content_image


			//check if there's finish image selected
			if (!empty($_FILES['finish_image']['name'])) {
				$level_config = array(
					'upload_path' => './contents/events/webbed/',
					'allowed_types' => 'jpg',
					'max_size' => '1024',
					'max_width' => '1000',
					'max_height' => '1000',
					'file_name' => 'finish_'.$level.'.jpg',
					'overwrite' => TRUE
					);

				$this->upload->initialize($level_config);

				if (!$this->upload->do_upload('finish_image') ){
					$error = $this->upload->display_errors();

					$data['page'] = 'wbdadmin/add_level';
					$data['header_data'] = array('title' => 'Add Level - Webbed');
					$data['upload_error']= '<strong>Level Finish Image:</strong>'.$error;
					$this->load->view('webbed/template', $data);

					return;
				}else{
					$img_data = $this->upload->data();
					$img_finish = $img_data['orig_name'];
				}
			}//end upload code for content_image

			//add to database

			//Set content appropriately.
			if($img_level){
				if($this->input->post('content_text')!=''){
					$content = $this->input->post('content_text').'<br><br><img src="webbed/levels/'.$img_level.'"/></a>';
				}else{
					$content = '<img src="webbed/levels/'.$img_level.'"/>';
				}
			}else{
				$content = '<br><br><br>'.$this->input->post('content_text');
			}

			if($img_finish){
				$finish = $img_finish;
			}else{
				$finish = NULL;
			}

			$full_details = array(
				'level' => $this->input->post('level'),
				'title' => $this->input->post('title'),
				'difficulty' => $this->input->post('difficulty'),
				'content' => $content, //add text and image
				'answer' => md5($this->input->post('answer')),
				'placeholder' => $this->input->post('placeholder'),
				'html_comment' => $this->input->post('html_comment'),
				'success_image' => $finish,
				'background' => NULL,
				'cookie' => NULL,
				'javascript' => NULL,
				'status' => 0
			);

			$this->load->model('webbed_admins_model');

			if($this->webbed_admins_model->add_level($full_details)){
				//successfully added
				redirect('/wbdadmin/levels','location');
			}else{
				$data['page'] = 'error';
				$data['header_data'] = array('title' => 'Error when adding levels');
				$this->load->view('webbed/template', $data);
			}
		
		//end add_level function
		}else if($page_type==="status"){
			//change level status (active/deactive)

			$level = $this->input->get('level');
			$status = $this->input->get('now');
			
			if($status==1){
				$status=0;
			}else{
				$status=1;
			}


			$this->load->model('webbed_admins_model');
			$this->webbed_admins_model->set_status($level,$status);

			redirect('/wbdadmin/levels','location');
		}else if($page_type==="set_user"){
			//set current admins level for debugging
			$this->load->model('webbed_admins_model');
			$this->webbed_admins_model->set_admin_level($this->input->post('level'));
			redirect('/wbdadmin/levels','location');
		}else{
			//Manage Levels page.
			$this->load->model('webbed_admins_model');
			$levels = $this->webbed_admins_model->get_all_levels();

			$data['page'] = 'wbdadmin/levels';
			$data['levels'] = $levels;
			$data['current_level'] = $this->webbed_admins_model->get_admin_level();
			$data['header_data'] = array('title' => 'Manage Levels - Webbed');
			$this->load->view('webbed/template', $data);
		}
	}

	public function users(){

		$this->load->model('webbed_admins_model');
		$user_id = $this->input->get_post('user_id');

		//post_username has user's fb_uid when
		//answer log is requested
		if($user_id=='')
		{
			$users = $this->webbed_admins_model->get_users();

			$data['users'] = $users;

			$data['page'] = 'wbdadmin/users';
			$data['header_data'] = array('title' => 'All Users - Webbed');
			$this->load->view('webbed/template', $data);	
		}else{
			//show default users page with details of all users
			$user_log = $this->webbed_admins_model->get_log($user_id);
			$data['user_log'] = $user_log;

			$data['page'] = 'wbdadmin/user_log';
			$data['header_data'] = array('title' => 'Log for '.$user_id);
			$this->load->view('webbed/template', $data);	
		}
	}
    
	public function banned_users(){
		$this->load->model('webbed_admins_model');
		$user_id = $this->input->get_post('ban_user_id');
        if(isset($user_id))
		$this->webbed_admins_model->ban_user($user_id);
		$users = $this->webbed_admins_model->get_banned_users();
        $data['users'] = $users;
        $data['page'] = 'wbdadmin/banned_users';
		$data['header_data'] = array('title' => 'All Users - Webbed');
		$this->load->view('webbed/template', $data);
	}

}