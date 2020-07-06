<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->simple_login->check_login();
	}

	public function index()
	{
		$data = array('title' => 'Data Lapangan | Jetz Indonesia',
					  'content' => 'admin/lapangan/list'
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

}

/* End of file Lapangan.php */
/* Location: ./application/controllers/admin/Lapangan.php */