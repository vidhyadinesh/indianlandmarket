<?php
class subcategorymodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function getSubCategories($limit=0, $start=0, $sortField=''){
		$this->db->select("prop_sub_category.*, category.category");
        $this->db->join('category','category.id=prop_sub_category.category_id','left');
		//$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
		$query = $this->db->limit($limit, $start);		
		
		$query = $this->db->get('prop_sub_category');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
	
	
	public function total_count() {
	  // $this->db->where('status', 0);
       $query =  $this->db->get("prop_sub_category");
	   return $query->num_rows();
    }
	
	
	public function delete($subcategoryId){
		$this->db->where('id',$subcategoryId);
		$this->db->delete('prop_sub_category');
	}
	
	public function getSubcategoryById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('prop_sub_category');
		return $query->row_array();
	}
	
	public function insertDetails($data){
		$this->db->insert('prop_sub_category',$data);
	}
	
	public function updateDetails($data, $subcategoryId){
		$this->db->where('id',$subcategoryId);
		$this->db->update('prop_sub_category',$data);
	}
	
}
?>