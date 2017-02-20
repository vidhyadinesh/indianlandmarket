<?php
class propamenitiesmodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function insertAmenities($amenities=array(), $propertyId){
		$amenitiesData = array();
		foreach($amenities as $key => $val){
			$amenitiesData = array( 'amenities_id'=>$key,
        						 'amenities_description' => $val,
								 'property_id' =>  $propertyId);
			$this->db->insert('prop_amenities',$amenitiesData);
		}
		//$query = $this->db->query("SELECT category FROM property WHERE id='$propertyId'"); 
		//return $query->row();		
	}


	public function getAmenitiesByPropId($propertyId){
		/*$this->db->where('property_id', $propertyId);
	    return $this->db->get('prop_amenities')->result_array();*/	

		$query = $this->db->query("select pa.*,a.amenities as amenity_name from prop_amenities as pa
    	left join amenities as a on pa.amenities_id = a.id 
      	where pa.property_id= '$propertyId'");
		return $query->result_array();
	}
	
	public function deleteAmenities($propertyId){
		$this->db->where('property_id', $propertyId);
		$this->db->delete('prop_amenities');
	}
	
	
}
?>