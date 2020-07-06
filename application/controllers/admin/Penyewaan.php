<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Penyewaan_m','booking');
		$this->load->model('admin/Pembayaran_m','bayar');
		$this->simple_login->check_login();
	}

	public function index()
	{
		$data = array('title' => 'Data Penyewaan | Jetz Indonesia',
					  'content' => 'admin/penyewaan/list',
					  'lists' => $this->booking->lists()
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function cancel_booking()
	{
		$id = $this->uri->segment('4');
		$data = array('title' => 'Data Penyewaan | Jetz Indonesia',
					  'content' => 'admin/penyewaan/cancel',
					  'detail' => $this->booking->detail($id)
					 );
		$this->load->view('admin/template/wrapper', $data, FALSE);
	}

	public function cancel_act()
	{
		$id = $this->uri->segment('4');
		$data_book = array('booking_status' => 'cancel'	  			
					 );
		$this->booking->update($data_book,$id) ;

		//Cek Data pembayaran
		$bayar_id = $this->bayar->cek_booking($id);
		$a = 0;
      	if(empty($bayar_id)) {
      	}else{ 

          		$data_bayar = array('bayar_status' => 'cancel');
				$this->bayar->update( $id, $data_bayar); 
          	
        }

		$this->session->set_flashdata('success','Thank You, Your Booking Has been cancelled');
		redirect(base_url().'admin/penyewaan');
			// var_dump($datas);
	}




}

/* End of file Penyewaan.php */
/* Location: ./application/controllers/admin/Penyewaan.php */