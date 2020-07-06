<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends CI_Model {

	
 	public function lists()
 	{
 		$this->db->select('*');
 		$this->db->from('users');
 		$this->db->order_by('users_name', 'asc');	
	    $query = $this->db->get();
	    if($query->num_rows()>0)
	      {return $query->result();}
	    else{return null;}
 	}

 		public function insert($data)
	{
		
		return  $this->db->insert('users', $data); 
	}
	public function edit($data)
	{
		$db2 = $this->load->database('podonew', TRUE);
		return  $db2->insert('activity_paket', $data); 
	}
	public function delete($data)
	{
		$db2 = $this->load->database('podonew', TRUE);
		return  $db2->insert('activity_paket', $data); 
	}
}

/* End of file Users_m.php */
/* Location: ./application/models/admin/Users_m.php */