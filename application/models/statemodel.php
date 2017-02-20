<?php
class statemodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}

	public function getstates(){
		$query = $this->db->get('states');
		return $query->result();
	}
	
}
?>