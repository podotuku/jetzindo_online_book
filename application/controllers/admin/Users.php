<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Users_m', 'users');
		$this->simple_login->check_login();
	}

	public function index()
	{
		$data = array('title' => 'Data Users | Jetz Indonesia',
					  'content' => 'admin/users/list',
					  'list'	=> $this->users->lists()
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function add()
	{
		$NAME             = $this->input->post('NAME');
			$EMAIL            = $this->input->post('EMAIL');
			$USERNAME         = $this->input->post('USERNAME');
			$PASSWORD_S       = $this->input->post('PASSWORD');
			$PASSWORD         = sha1($this->input->post('PASSWORD'));
			$CONFIRM_PASSWORD = sha1($this->input->post('RE_PASSWORD'));
			$GROUP_ACCESS     = $this->input->post('access');
			$STATUS           = $this->input->post('STATUS');

			$this->form_validation->set_rules('NAME', 'Name User', 'required');
			$this->form_validation->set_rules('EMAIL', 'Email User', 'required');
			$this->form_validation->set_rules('USERNAME', 'Username', 'required|min_length[5]');
			$this->form_validation->set_rules('PASSWORD', 'Password', 'required|min_length[6]');
			$this->form_validation->set_rules('STATUS', 'Status User', 'required');
			$this->form_validation->set_rules('RE-PASSWORD', 'Confirm Password', 'trim|matches[PASSWORD]');

			if($this->form_validation->run()){

				$data_user = array('USERS_NAME' => $NAME,
					'USERS_EMAIL'     => $EMAIL,
					'USERS_USERNAME'  => $USERNAME,
					'USERS_PASSWORD'  => $PASSWORD,
					'users_level' => $GROUP_ACCESS,
					'USERS_STATUS'    => $STATUS,
				);
				$this->users->insert($data_user);
				$this->session->set_flashdata('success','New User data has been added successfuly');
				redirect(base_url().'admin/users');
			
				
			}else{
				
			}
			$data = array('title' => 'Data Users | Jetz Indonesia',
					  'content' => 'admin/users/add',
					  
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function edit()
		{
			$ID 			= $this->input->post('ID');
			$NAME 			= $this->input->post('NAME');
			$EMAIL 			= $this->input->post('EMAIL');
			$GROUP_ACCESS 	= $this->input->post('GROUP_ACCESS');
			$PHONE			= $this->input->post('PHONE');

			$data_user = array('USERS_ID'	=> $ID,
				'USERS_NAME' => $NAME,
				'USERS_EMAIL' => $EMAIL,
				'USERS_ACCESS_ID' => $GROUP_ACCESS,
				'USERS_PHONE' => $PHONE
			);
			$this->users->edit($data_user, $ID);
			$this->session->set_flashdata('success','User '.$NAME.' has been updated');
			redirect(base_url().'backend/users');

		}

}

/* End of file Users.php */
/* Location: ./application/controllers/admin/Users.php */