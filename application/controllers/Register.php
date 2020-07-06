<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Lapangan_m', 'lapangan');
	}


	public function index()
	{
		$data = array('title' => 'Jetz Indonesia | Penyewaan Lapangan',

	);

		$this->load->view('booking/list_new', $data, FALSE);
	}

	public function getDaftar()
	{
		$nama      = $this->input->post('nama');
		$email     = $this->input->post('email');
		$telp      = $this->input->post('telp');
		$komunitas = $this->input->post('komunitas');
		$tanggal   = $this->input->post('tanggal');
		$mulai     = $this->input->post('mulai');
		$selesai   = $this->input->post('selesai');
		$a         = explode(' ',trim(str_replace(':', ' ', $mulai)))[0];
		$b         = explode(' ',trim(str_replace(':', ' ', $selesai)))[0];

		$row   = $this->db->query("SELECT MAX(booking_id) AS maxid FROM booking")->row();
		if ($row) {
			$maxid = $row->maxid + 1; 
		}

		$kode   = sprintf("%06d", $maxid);
		$no_po  ='BOOK'.date("y").date("m").$kode;
		$details = array(
			'booking_kode'          => $no_po,
			'booking_nama_pemesan'  => $nama, 
			'booking_email_pemesan' => $email,
			'booking_phone_pemesan' => $telp,
			'booking_tanggal'       => date_format(date_create($tanggal),'Y-m-d'),
			'booking_jam_awal'      => $mulai,
			'booking_jam_akhir'     => $selesai,
			'booking_harga'         => 275000,
			'booking_total_harga'   => (($b-$a)*275000),
			'booking_status'        => 'booked',

		);


		$this->lapangan->insert($details);

		$from      = 'booking@jetzindonesia.com';
		$to_email  = $email;
		$bcc_email = array('eka.tarigan@podotuku.com','aris.kurniawan@myaccess.co.id','dini.wulandari@myaccess.co.id');
		$detail    = $no_po;
		$body      = $this->load->view('booking/email_temp',$details, TRUE);
		$this->load->library('email');
		$this->email->from($from, 'Admin Lapangan'.' | Jetz Booking');
		$this->email->to($to_email);
		$this->email->bcc($bcc_email);
		$this->email->subject('Kode Booking Jetz '. $no_po );
		$this->email->message($body);
		$this->email->send();
		echo $response = "ok";
		// $order_detail = $this->trans->insert_req('orders_detail',$detail);

	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */