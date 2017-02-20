<?php
class advertisementmodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}
	
	public function getAdvertisements($limit=0, $start=0, $sortField=''){
		$this->db->select("*");
		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
		$query = $this->db->limit($limit, $start);		
		
		$query = $this->db->get('advertisement');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
	
	
	public function total_count() {
	  // $this->db->where('status', 0);
       $query =  $this->db->get("advertisement");
	   return $query->num_rows();
    }
	
	public function delete($advId){
		$this->db->where('id',$advId);
		$this->db->delete('advertisement');
	}
	
	public function getpositionByPage($page){
		$this->db->where('page', $page);
		$query = $this->db->get('advertisement_position');
		return $query->result();
	}
	
	public function insertDetails($data){
		$this->db->insert('advertisement',$data);
	}
	
	public function getAdvById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('advertisement');
		return $query->row_array();
	}
	
	
	public function updateDetails($data, $advId){
		$this->db->where('id',$advId);
		$this->db->update('advertisement',$data);
		//echo $this->db->last_query();die();
	}
	
	public function getAdvertisementsByPage($page=''){
		$this->db->where('page', $page);
		$query = $this->db->get('advertisement');
		$advertisements = $query->result_array();
		//echo '<pre>';
		//print_r($advertisements);die();
		$advtments = array();
		if(!empty($advertisements)){
			foreach($advertisements as $key=> $val){
				$advtments[$advertisements[$key]['position']] = $val;
			}			
		}		
		return $advtments;
	
	}
	
}
?>