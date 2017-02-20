<?php
class featuremodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	public function getAdvancedFeatures($categoryId){
		$this->db->where('category_id', $categoryId);
		$query = $this->db->get('features');
		return $query->result();
	}
	
	public function getFeatureDetails($limit=0, $start=0, $sortField=''){
		$this->db->select("features.*, category.category");
        $this->db->join('category','category.id=features.category_id','left');
		//$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
		$query = $this->db->limit($limit, $start);		
		
		$query = $this->db->get('features');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
	
	
	public function total_count() {
	  // $this->db->where('status', 0);
       $query =  $this->db->get("features");
	   return $query->num_rows();
    }
	
	
	public function delete($featureId){
		$this->db->where('id',$featureId);
		$this->db->delete('features');
	}
	
	public function getFeatureById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('features');
		return $query->row_array();
	}
	
	public function insertDetails($data){
		$this->db->insert('features',$data);
	}
	
	public function updateDetails($data, $featureId){
		$this->db->where('id',$featureId);
		$this->db->update('features',$data);
	}
	
}
?>