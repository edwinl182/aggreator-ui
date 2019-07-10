<?php 

class Estimate_model extends CI_model{
	function insert_personal_data($data){
		$this->db->insert('customers',$data);
		return $this->db->insert_id();
	}
	function verify_email($key){
		$this->db->where('verification_key',$key);
		$this->db->where('is_email_verified','no');
		$query = $this->db->get('customers');
		if($query->num_rows()>0){
			$data = array('is_email_verified'=>'yes');
			$this->db->where('verification_key',$key);
			if($this->db->update('customers',$data)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function insert_items_data($data){
		$this->db->where('estimate_id',$data['estimate_id']);
		$this->db->where('user_id',$data['user_id']);
		$query = $this->db->get('estimate');
		if($query->num_rows() <= 0){
			if($this->db->insert('estimate',$data)){
				return true;
			}else{
				return "Error encountered while making the request. Please try again later.";
			}
		}else{
			return "A request has been made already, Please login to update your request";
		}
	}
}

 ?>