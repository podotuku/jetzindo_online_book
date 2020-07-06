<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewaan_m extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->order_by('booking_id','desc');
		$query = $this->db->get();
	    if($query->num_rows()>0)
	      {return $query->result();}
	    else{return null;}
	}

		public function new_lists()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->order_by('booking_id','desc');
		$this->db->limit('10');
		$query = $this->db->get();
	    if($query->num_rows()>0)
	      {return $query->result();}
	    else{return null;}
	}

		public function lists_not_paid()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->where('booking_status','not paid');
		$this->db->order_by('booking_id','desc');
		$query = $this->db->get();
	    if($query->num_rows()>0)
	      {return $query->result();}
	    else{return null;}
	}

	public function search_barcode($id)
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->where('booking_kode',$id);
		$q = $this->db->get();
		if($q->num_rows()>0)
        {return $q->row(); }
        else{return null;}
       }
    public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->where('booking_id',$id);
		$q = $this->db->get();
		if($q->num_rows()>0)
        {return $q->row(); }
        else{return null;}
       }

    public function update($data, $id){
		$this->db->where('booking_id', $id);
		$this->db->update('booking', $data);
	}
}

/* End of file Penyewaan_m.php */
/* Location: ./application/models/admin/Penyewaan_m.php */