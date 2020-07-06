<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_m extends CI_Model {

	public function insert($data)
	{
		
		return  $this->db->insert('booking', $data); 
	}

	public function update($id,$data){

		$this->db->where('booking_id', $id);
		return $this->db->update('booking', $data);
	}

}

/* End of file Booking_m.php */
/* Location: ./application/models/Booking_m.php */