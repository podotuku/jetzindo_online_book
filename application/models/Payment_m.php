<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_m extends CI_Model {

	public function search_booking_code($id)
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->where('booking_kode',$id);
		$q = $this->db->get();
		if($q->num_rows()>0)
        {return $q->row(); }
        else{return null;}
    }

    public function check_payment($id)
	{
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->where('bayar_id_booking',$id);
		$q = $this->db->get();
		if($q->num_rows()>0)
        {return $q->row(); }
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

/* End of file Payment_m.php */
/* Location: ./application/models/Payment_m.php */