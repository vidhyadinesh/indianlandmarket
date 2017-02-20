<?php
class categorymodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function getCategories(){
		$query = $this->db->get('category');
		return $query->result();
	}
	
	public function getsubcategories($categoryId){
		$this->db->where('category_id', $categoryId);
		$query = $this->db->get('prop_sub_category');
		return $query->result();
	}
	
	public function getSubcategoryDetails($subcategoryId){
		$this->db->where('id', $subcategoryId);
		return $this->db->get('prop_sub_category')->row_array();
		//return $query->result();
	}
	
}
?>