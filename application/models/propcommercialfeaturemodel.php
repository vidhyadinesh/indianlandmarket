<?php
class propcommercialfeaturemodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function insertFeatures($data){
		$this->db->insert('prop_commercial_features',$data);
	}
	
	public function getDetails($propertyId){
		$this->db->where('property_id', $propertyId);
	     return $this->db->get('prop_commercial_features')->row_array();
	}
	
	public function propertyExists($propertyId){
		$query = $this->db->query("SELECT * FROM prop_commercial_features WHERE property_id='$propertyId'");    
		if($row = $query->row()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function updateFeatures($data){
		$this->db->where('property_id',$data['property_id']);
		$this->db->update('prop_commercial_features',$data);
	}	
}
?>