<?php
class propprojectfeaturemodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function insertFeatures($data){
		$this->db->insert('prop_project_features',$data);
	}
	
	public function getDetails($propertyId){
		$this->db->where('property_id', $propertyId);
	    return $this->db->get('prop_project_features')->row_array();
	}	
	
	public function propertyExists($propertyId){
		$query = $this->db->query("SELECT * FROM prop_project_features WHERE property_id='$propertyId'");    
		if($row = $query->row()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function updateFeatures($data){
		$this->db->where('property_id',$data['property_id']);
		$this->db->update('prop_project_features',$data);
	}
}
?>