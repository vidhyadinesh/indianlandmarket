<?php
class projfloorplanmodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}	
	
	public function insertImages($data){
		 $this->db->insert('proj_floor_plan_images', $data);
	}
	
	/*public function getImagesByPropId($propertyId){
		$this->db->where('property_id', $propertyId);
		return $this->db->get('prop_images')->result_array();
	}*/
	
	public function getfloorplansByPropId($propertyId){
		$this->db->where('property_id', $propertyId);
		return $this->db->get('proj_floor_plan_images')->result_array();
	}	
	
	public function removeFloorPlan($id){
		$this->db->where('id',$id);
		$this->db->delete('proj_floor_plan_images');
	}
	
}
?>