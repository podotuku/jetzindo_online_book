<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Penyewaan_m','book');
		$this->load->model('admin/Pembayaran_m','pay');
		$this->simple_login->check_login();
	}

	public function index()
	{
		$data = array('title' => 'Jetz Indonesia | Penyewaan Lapangan',
			          'content' => 'admin/dashboard/lists',
			          'booking' => $this->book->new_lists(),
			          'pay' => $this->pay->new_lists()
		             );

		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

		public function booking()
	{
		$data = array('title' => 'Jetz Indonesia | Penyewaan Lapangan',
			          'content' => 'admin/dashboard/add_booking'
		             );

		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */