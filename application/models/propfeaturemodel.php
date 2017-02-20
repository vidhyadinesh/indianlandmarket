<?php
class propfeaturemodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function insertAdvFeatures($data,$propId){
		$features = array();
		foreach($data as $val){
			$features = array( 'property_id'=>$propId,
        						 'feature_id' => $val );
			$this->db->insert('prop_features',$features);
		}	
	}
	
	public function getFeaturesByPropId($propertyId){
		//$this->db->where('property_id', $propertyId);
	    //return $this->db->get('prop_features')->result_array();
		$query = $this->db->query("select pf.*,f.feature as feature_name from prop_features as pf
    	left join features as f on pf.feature_id = f.id 
      	where pf.property_id= '$propertyId'");
		return $query->result_array();

	}
	
	public function deleteProperty($propertyId){
		$this->db->where('property_id', $propertyId);
		$this->db->delete('prop_features');
	}

    public function getPropByFeatures($featureIds){
        $this->db->select('property_id');
        $this->db->where_in('feature_id', $featureIds);
        $query = $this->db->get('prop_features');

// and fetch result
        //$res = $query->result(); // as object
        return $query->result_array(); // a
    }
	
	
}
?>