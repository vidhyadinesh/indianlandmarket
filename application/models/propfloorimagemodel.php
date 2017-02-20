<?php
class propfloorimagemodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}	
	
	public function insertImages($data){
		 $this->db->insert('prop_floor_images', $data);
	}
	
	public function getDetails($propertyId){
		//$this->db->where('id', $propertyId);
		$query = $this->db->query("SELECT * FROM prop_floor_images WHERE property_id='$propertyId'"); 
		return $query->row_array();
	}
	
	public function removeFloorImage($id){
		$this->db->where('id',$id);
		$this->db->delete('prop_floor_images');
	}
	
}
?>