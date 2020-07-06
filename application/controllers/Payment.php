<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Payment_m','pay');
		$this->load->model('Booking_m','book');
	}

	public function confirm_payment()

	{
		$BOOKING_CODE 	= $this->input->post('booking_kode');
		$NOMINAL 		= $this->input->post('nominal');
		$TGL_BAYAR 		= $this->input->post('tgl_bayar');
		$BANK 			= $this->input->post('bank');
		$PENGIRIM		= $this->input->post('pengirim');
		
		if($this->input->post('tgl_bayar') == ''){
			$tgls = '';
		}else{
			$tgls = date_format(date_create($this->input->post('tgl_bayar')),'Y-m-d');
		}
		$PAYMENT_APPROVAL = $this->session->userdata('id_user');

		$this->form_validation->set_rules('nominal', 'Nominal', 'required');
		$this->form_validation->set_rules('tgl_bayar', 'Tanggal Bayar', 'required');
		if ($this->form_validation->run()) {

			//CEK KODE BOOKING
			
			$booking_id = $this->pay->search_booking_code($BOOKING_CODE)->booking_id;
			$bayar_id = '';	
			if($booking_id == NULL){
				$this->session->set_flashdata('failed','Sorry, Your Booking code is invalid, check again');
				redirect(base_url().'payment/confirm_payment');
			}else{
				$bayar_id = $this->pay->check_payment($booking_id); 
				if(!empty($bayar_id)){
					$this->session->set_flashdata('gagal','Sorry, Your Confirmation has been added, check your status booking');
					redirect(base_url().'payment/confirm_payment');
				}else{
					
					$config['upload_path']="./assets/upload/bukti_bayar";
					$config['allowed_types']='gif|jpg|png|jpeg';
					$config['max_size']= 4000;

					$this->load->library('upload',$config);
					if($this->upload->do_upload("file")){
						$data_image = array('upload_data' => $this->upload->data());

						$datas = array('bayar_id_booking' => $booking_id,
							'bayar_nominal' => $NOMINAL,
							'bayar_bank'			=> $BANK ,
							'bayar_status' 			=> 'process',
							'bayar_tgl_bayar' 		=> $tgls,
							'bayar_pengirim' 		=> $PENGIRIM,
							'bayar_method' 			=> 'Transfer',
							'bayar_bukti_bayar'		=> $data_image['upload_data']['file_name'],
							'bayar_created_date' 	=> date('Y-m-d h:m:s')
						);
						$this->pay->insert($datas);
						$data_book = array('booking_status' => 'waiting approval');

						$this->book->update($booking_id, $data_book);

						$this->session->set_flashdata('success','Thank You, Your Payment Has been added');
						redirect(base_url().'payment/confirm_payment');
					}else{
						$error = $this->upload->display_errors();
						$data = array('title' => 'Jetz Indonesia | Konfirmasi Pembayaran','errors' => $error);

						$this->load->view('payment/confirm_payment', $data, FALSE);


					}
				}	
			}




			// var_dump($datas);
		} else {
			$data = array('title' => 'Jetz Indonesia | Konfirmasi Pembayaran');

			$this->load->view('pembayaran/confirm_payment', $data, FALSE);
		}
	}

	public function check_payment()
	{
		$BOOKING_CODE 	= $this->input->post('booking_kode');		
		$this->form_validation->set_rules('booking_kode', 'Booking Kode', 'required');
		if ($this->form_validation->run()) {
			$booking_id = $this->pay->search_booking_code($BOOKING_CODE)->booking_id;
			$bayar_id = '';	
			if($booking_id == NULL){
				$this->session->set_flashdata('failed','Your Booking code is invalid, check again');
				redirect(base_url().'payment/check_payment');
			}else{
				$bayar_id = $this->pay->check_payment($booking_id); 
				if(!empty($bayar_id)){
					$status_bayar = $bayar_id->bayar_status;
					$tgl_bayar = $bayar_id->bayar_tgl_bayar;
					$this->session->set_flashdata('success','Your Booking ID '.$BOOKING_CODE.' payment status is '.$status_bayar);
					redirect(base_url().'payment/check_payment');
				}else{
					$this->session->set_flashdata('gagal','Your Confirmation has been added, check your status booking');
					redirect(base_url().'payment/check_payment');
				}
		}
		
		
}
$data = array('title' => 'Jetz Indonesia | Konfirmasi Pembayaran');

		$this->load->view('pembayaran/check_payment', $data, FALSE);
	}
}

	/* End of file Payment.php */
/* Location: ./application/controllers/Payment.php */