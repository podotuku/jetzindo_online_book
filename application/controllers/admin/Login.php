<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$valid = $this->form_validation;
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$remember = $this->input->post('remeber');
		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		if($valid->run()) {
			$this->simple_login->login($username,$password, $remember, base_url('admin/dashboard'), base_url('admin/login'));
		}
		$data = array('title' => 'Jetz Indonesia | Login Page'
		);
		$this->load->view('admin/login', $data, FALSE);
	}

	public function logout() {
		$page = base_url().'admin/login';
		$this->simple_login->logout($page,'Logout successfully');
	}
	

}