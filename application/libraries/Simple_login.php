<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');
class Simple_login {
 // SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
		//$this->db = $this->CI->load->database('podonew', TRUE);
	}
 // Fungsi login
	public function login($username, $password, $remember, $success_page, $failed_page) {
		$query = $this->CI->db->get_where('users',array('users_username'=>$username,'users_password' => $password));
		if($query->num_rows() == 1) {
			$row = $this->CI->db->query('SELECT * FROM users where users_username = "'.$username.'"');
			$admin = $row->row();
			$id = $admin->users_id;
			$nama = $admin->users_name;
			$access = $admin->users_level;
			$email = $admin->users_email;
			// $this->CI->session->set_userdata('login_session', rand($username.$password));

			$this->CI->session->set_userdata('user_login', $username);

			$this->CI->session->set_userdata('nama', $nama);

			$this->CI->session->set_userdata('access', $access);
			$this->CI->session->set_userdata('id_user', $id);
			$this->CI->session->set_userdata('email', $email);
			$this->CI->session->set_flashdata('success_message_login', 'Success');

			

			if($remember == 'remember'){

				$cookie = array(

					'name'   => 'remember_me',

					'value'  => 'remember',

					'expire' => '1209600',

					'domain' => base_url(),

					'path'   => '/',

					'secure' => TRUE

				);

				$this->CI->input->set_cookie($cookie);

				$this->CI->input->cookie('remember_me', TRUE);

				redirect($success_page);			

			}else{

				redirect($success_page);
			}

		}else{

			$this->CI->session->set_flashdata('failed_message_login', 'Sorry, Your username or password is wrong, please try again');

			redirect(base_url().'admin/login');

		}
	}

	public function check_login(){

		if($this->CI->input->cookie('remember_me') != '') {

			return true;

		}elseif($this->CI->session->userdata('login_session') == '' && $this->CI->session->userdata('user_login') == ''){

			redirect(base_url().'admin/login');

		}

		return true;

	}
 // Fungsi logout
	public function logout($page, $message) {

		$this->CI->session->unset_userdata('login_session');

		$this->CI->session->unset_userdata('user_login');

		$this->CI->session->set_flashdata('logout_success',$message);

		delete_cookie('remember_me');

		redirect(base_url().'admin/login');

	}	
}