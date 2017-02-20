<?php
class shortlistmodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}	
	
	public function insertDetails($data){
		$this->db->insert('shortlisted_properties',$data);
	}
	
	public function removeShortlist($id){
		$this->db->where('id',$id);
		$this->db->delete('shortlisted_properties');
	}
	
}
?>