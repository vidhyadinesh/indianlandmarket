<?php
class amenitiesmodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	public function getAmenities(){
		$query = $this->db->get('amenities');
		return $query->result();
	}
	
	public function getAmenitiesDetails($limit=0, $start=0, $sortField=''){
		$this->db->select("*");
        //$this->db->join('category','category.id=property.category','left');
		//$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
		$query = $this->db->limit($limit, $start);		
		
		$query = $this->db->get('amenities');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
	
	
	public function total_count() {
	  // $this->db->where('status', 0);
       $query =  $this->db->get("amenities");
	   return $query->num_rows();
    }
	
	
	public function delete($amenityId){
		$this->db->where('id',$amenityId);
		$this->db->delete('amenities');
	}
	
	public function getAmenityById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('amenities');
		return $query->row_array();
	}
	
	public function insertDetails($data){
		$this->db->insert('amenities',$data);
	}
	
	public function updateDetails($data, $amenityId){
		$this->db->where('id',$amenityId);
		$this->db->update('amenities',$data);
	}
	
}
?>