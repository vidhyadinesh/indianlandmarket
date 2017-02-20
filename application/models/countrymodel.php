<?php
class countrymodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}	
	
	public function getcountries(){
		$query = $this->db->get('countries');
		return $query->result();
	}
	
}
?>