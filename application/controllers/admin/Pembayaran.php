<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Pembayaran_m','bayar');
		$this->load->model('admin/Penyewaan_m','booking');
		$this->simple_login->check_login();
	}

	public function index()
	{
		$data = array('title' => 'Data Pembayaran | Jetz Indonesia',
					  'content' => 'admin/pembayaran/list',
					  'list' => $this->bayar->lists()
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

		public function view()
	{
		$id = $this->uri->segment('4');
		$CARA_BAYAR		= $this->input->post('CARA_BAYAR');
		$NOMINAL 		= $this->input->post('NOMINAL');
		$STATUS 		= $this->input->post('STATUS');
		$TGL_BAYAR 		= $this->input->post('TGL_BAYAR');
		$BANK 			= $this->input->post('BANK');
		$PENGIRIM		= $this->input->post('PENGIRIM');
		
		if($this->input->post('TGL_BAYAR') == ''){
			$TGL_BAYAR = '';
		}else{
			$TGL_BAYAR = date_format(date_create($this->input->post('TGL_BAYAR')),'Y-m-d');
		}
		$PAYMENT_APPROVAL = $this->session->userdata('id_user');

		$this->form_validation->set_rules('NOMINAL', 'Nominal', 'required');
		$this->form_validation->set_rules('STATUS', 'Status Payment', 'required');
		$this->form_validation->set_rules('CARA_BAYAR', 'Cara Bayar', 'required');
		$this->form_validation->set_rules('TGL_BAYAR', 'Tanggal Bayar', 'required');
		if ($this->form_validation->run()) {
			$datas = array(
						  	'bayar_nominal' => $NOMINAL,
						  	'bayar_bank'			=> $BANK ,
						  	'bayar_status' 		=> $STATUS,
						  	'bayar_tgl_bayar' 	=> $TGL_BAYAR,
						  	'bayar_pengirim' 		=> $PENGIRIM,
						  	'bayar_method' 		=> $CARA_BAYAR,
						  	'bayar_status' 		=> $STATUS,
						 );
			$this->bayar->update($id, $datas );
			// $data_book = array('booking_status' => 'paid'	  			
			// 		 );

			//$this->booking->update($data_book, $BOOKING_ID);

			$this->session->set_flashdata('success','Thank You, Your Payment Has been added');
			redirect(base_url().'admin/pembayaran');
			// var_dump($datas);
		} else {
		$data = array('title' => 'Data Pembayaran | Jetz Indonesia',
					  'content' => 'admin/pembayaran/view',
					  'detail' => $this->bayar->detail($id)
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}
	}


	// 	public function add()
	// {
	// 	$data = array('title' => 'Data Pembayaran | Jetz Indonesia',
	// 				  'content' => 'admin/pembayaran/add',
	// 				  'booking_code' => $this->booking->lists_not_paid()
	// 				 );
	// 	$this->load->view('admin/template/wrapper', $data, FALSE);
	// }

	public function confirmation()
	{
		$data = array('title' => 'Data Payment | Jetz Indonesia',
					  'content' => 'admin/payment/confirm_payment',
					  'data'	=> $this->pay->list_confirmPayment_all()
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function approve_payment()
	{
		$id=$this->uri->segment('4');
		$data = array('PAYMENT_STATUS' => 'approve',
					  'PAYMENT_APPROVAL' => $this->session->userdata('id_user')
					 );
		$this->pay->update($data, $id);
		$this->session->set_flashdata('success','Payment has been approve');
		redirect(base_url().'admin/payment/confirmation');
	}

	public function decline_payment()
	{
		$id=$this->uri->segment('4');
		$data = array('PAYMENT_STATUS' => 'decline',
					  'PAYMENT_APPROVAL' => $this->session->userdata('id_user')
					 );
		$this->pay->update($data, $id);
		$this->session->set_flashdata('success','Payment has been decline');
		redirect(base_url().'admin/payment/confirmation');
	}

	public function add()
	{
		$BOOKING_ID 	= $this->input->post('ID_BOOK');
		$CARA_BAYAR		= $this->input->post('CARA_BAYAR');
		$NOMINAL 		= $this->input->post('NOMINAL');
		$STATUS 		= $this->input->post('STATUS');
		$TGL_BAYAR 		= $this->input->post('TGL_BAYAR');
		$BANK 			= $this->input->post('BANK');
		$PENGIRIM		= $this->input->post('PENGIRIM');
		
		if($this->input->post('TGL_BAYAR') == ''){
			$TGL_BAYAR = '';
		}else{
			$TGL_BAYAR = date_format(date_create($this->input->post('TGL_BAYAR')),'Y-m-d');
		}
		$PAYMENT_APPROVAL = $this->session->userdata('id_user');

		$this->form_validation->set_rules('NOMINAL', 'Nominal', 'required');
		$this->form_validation->set_rules('STATUS', 'Status Payment', 'required');
		$this->form_validation->set_rules('CARA_BAYAR', 'Cara Bayar', 'required');
		$this->form_validation->set_rules('TGL_BAYAR', 'Tanggal Bayar', 'required');
		$this->form_validation->set_rules('ID_BOOK', 'Booking ID', 'required');
		if ($this->form_validation->run()) {
			$datas = array('bayar_id_booking' => $BOOKING_ID,
						  'bayar_nominal' => $NOMINAL,
						  'bayar_bank'			=> $BANK ,
						  'bayar_status' 		=> $STATUS,
						  'bayar_tgl_bayar' 	=> $TGL_BAYAR,
						  'bayar_pengirim' 		=> $PENGIRIM,
						  'bayar_method' 		=> $CARA_BAYAR,
						  'bayar_status' 		=> $STATUS,
						 );
			$this->bayar->insert($datas);
			$data_book = array('booking_status' => 'booked');

			$this->booking->update($data_book, $BOOKING_ID);

			$this->session->set_flashdata('success','Thank You, Your Payment Has been added');
			redirect(base_url().'admin/pembayaran');
			// var_dump($datas);
		} else {
			$data = array('title' => 'Data Pembayaran | Jetz Indonesia',
					  'content' => 'admin/pembayaran/add',
					  'booking_code' => $this->booking->lists_not_paid()
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
		}

	}


	public function get_autocomplete_member(){
    if (isset($_GET['term'])) {
        $result = $this->member->search($_GET['term']);
        if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'MEMBER_ID'         	=> $row->ID,
                    'MEMBER_NAME'   		=> $row->MEMBER_FULLNAME
             );
                echo json_encode($arr_result);
                var_dump($arr_result);
        }
    }
}

	public function search()
	{
		// tangkap variabel keyword dari URL
		$keyword = $this->uri->segment("4");

		// cari di database
		$data = $this->member->search($keyword);

		$arr = array();
		foreach($data as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->MEMBER_BARCODE_ID,
				'name'	=>$row->MEMBER_FULLNAME,
				'm_id' => $row->ID,
				'last_payment' => number_format($row->LastPayment,'0','',','),
				'PAYMENT_MONTH' => $row->PAYMENT_MONTH,
				'PAYMENT_MONTHS' => date_format(date_create($row->PAYMENT_MONTH),'F Y'),
			);
		}
		// minimal PHP 5.2
		echo json_encode($arr);
	}



	public function search_barcode($id_barcode)
	{
		// tangkap variabel keyword dari URL

		// cari di database
		$arr = $this->booking->search_barcode($id_barcode);
		// var_dump($arr);
		// $last_payment = $this->payment->checkLastPayment()
    	// records have been returned
		$data=array(
        'NAME'=>$arr->booking_nama_pemesan,
 		'EMAIL' => $arr->booking_email_pemesan,
 		'ID_BOOK' => $arr->booking_id,
 		'LP' =>  number_format($arr->booking_total_harga,'0','',','),
 		'error' => true,
 		'TANGGAL_BOOK' => date_format(date_create($arr->booking_tanggal),'d F Y'),
 		'JAM_BOOK_AWAL' => $arr->booking_jam_awal,
 		'JAM_BOOK_AKHIR' => $arr->booking_jam_akhir,
 		'status'=>1);
		
		// minimal PHP 5.2
		echo json_encode($data,TRUE); 


	}

}

/* End of file Pembayaran.php */
/* Location: ./application/controllers/admin/Pembayaran.php */