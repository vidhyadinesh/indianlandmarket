<?php
class pgfeaturemodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}

	public function insertPgfeatures($pgfeaturearray){
		$this->db->insert('prop_pg_features',$pgfeaturearray);
	}	

	public function getPgFeatures($propertyId){
		$this->db->where('property_id', $propertyId);
	    return $this->db->get('prop_pg_features')->row_array();
		//return $query->row();
	}

	public function updatePgFeatures($data,$propId){
		$this->db->where('property_id',$propId);
		$this->db->update('prop_pg_features',$data);
		//echo $this->db->last_query();die();
	}
}
?>