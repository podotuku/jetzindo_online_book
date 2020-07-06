<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_m extends CI_Model {

	public function lists()
 	{
 		$this->db->select('*');
 		$this->db->from('pembayaran p');
 		$this->db->join('booking b','p.bayar_id_booking = b.booking_id');
 		$this->db->order_by('p.bayar_id', 'desc');	
	    $query = $this->db->get();
	    if($query->num_rows()>0)
	      {return $query->result();}
	    else{return null;}
 	}

 	public function new_lists()
 	{
 		$this->db->select('*');
 		$this->db->from('pembayaran p');
 		$this->db->join('booking b','p.bayar_id_booking = b.booking_id');
 		$this->db->order_by('p.bayar_id', 'desc');
 		$this->db->limit('10');		
	    $query = $this->db->get();
	    if($query->num_rows()>0)
	      {return $query->result();}
	    else{return null;}
 	}

 	public function detail($id)
 	{
 		$this->db->select('*');
 		$this->db->from('pembayaran p');
 		$this->db->join('booking b','p.bayar_id_booking = b.booking_id');
 		$this->db->where('p.bayar_id', $id);	
	    $query = $this->db->get();
	    if($query->num_rows()>0)
	      {return $query->row();}
	    else{return null;}
 	}

 	 	public function cek_booking($id)
 	{
 		$this->db->select('*');
 		$this->db->from('pembayaran p');
 		$this->db->join('booking b','p.bayar_id_booking = b.booking_id');
 		$this->db->where('p.bayar_id_booking', $id);	
	    $query = $this->db->get();
	    if($query->num_rows()>0)
	      {return $query->result();}
	    else{return null;}
 	}


 	public function insert($data)
	{
		
		return  $this->db->insert('pembayaran', $data); 
	}

	public function update($id,$data){

		$this->db->where('bayar_id', $id);
		return $this->db->update('pembayaran', $data);
	}

}

/* End of file Pembayaran_m.php */
/* Location: ./application/models/admin/Pembayaran_m.php */