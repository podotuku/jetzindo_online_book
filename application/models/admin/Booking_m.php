<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_m extends CI_Model {

	
 	public function insert($data)
	{
		
		return  $this->db->insert('pembayaran', $data); 
	}

	public function update($id,$data){

		$this->db->where('bayar_id', $id);
		return $this->db->update('pembayaran', $data);
	}

}

/* End of file Booking_m.php */
/* Location: ./application/models/admin/Booking_m.php */