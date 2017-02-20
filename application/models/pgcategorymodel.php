<?php
class pgcategorymodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function getCategories(){
		$query = $this->db->get('pg_category');
		return $query->result();
	}

	public function insertPg($proparray){
		$this->db->insert('pg_category',$proparray);
	}	
}
?>