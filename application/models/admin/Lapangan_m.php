<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan_m extends CI_Model {

	public function insert($data)
	{
		return  $this->db->insert('booking', $data); 
	}

}

/* End of file Lapangan_m.php */
/* Location: ./application/models/admin/Lapangan_m.php */