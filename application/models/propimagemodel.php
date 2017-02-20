<?php
class propimagemodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}	
	
	public function insertImages($data){
		 $this->db->insert('prop_images', $data);
	}
	
	public function getImagesByPropId($propertyId){
		$this->db->where('property_id', $propertyId);
		return $this->db->get('prop_images')->result_array();
	}
	
	public function removeImage($id){
		$this->db->where('id',$id);
		$this->db->delete('prop_images');
	}
	
}
?>