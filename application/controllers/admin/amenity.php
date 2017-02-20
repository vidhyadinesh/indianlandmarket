<?php
class amenity extends CI_controller{

//var $mcontents = array();

	public function __construct(){
		parent:: __construct();
		$this->load->model('amenitiesmodel');
		$this->load->library("pagination");	
	}	
	

	public function listing($offset = 0){
		$count = $this->amenitiesmodel->total_count();
		//$offset = $this->input->get('offset', 0);
				
		$offset = ($this->uri->segment(4) != '' ? $this->uri->segment(4): 0); 
		$config['total_rows'] =  $count;
		$config['per_page']= 5;
		$perpage = $this->input->post('perpage');  
		if($perpage){
			$config['per_page'] = $perpage;
		}
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 4;
		$config['base_url']= base_url().'index.php/admin/amenity/listing'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->pagination->total_rows;
		}  
		$sortField = $this->input->post('sort_field'); 
    	$amenitiesDetails = $this->amenitiesmodel->getAmenitiesDetails($config["per_page"], $offset,$sortField);  
		
		//echo '<pre>';
		//print_r($propertyDetails);die();
		$this->data['amenities']  = $amenitiesDetails;
		$data = $this->load->view("admin/amenities/amenities",$this->data, true);
		echo $data;
		
	}
	
	public function amenities(){
		$this->data['adminname'] = $this->session->userdata('name');
		$this->data['adminemail'] = $this->session->userdata('email');
		$this->load->view('admin/amenities/list', $this->data);
	}
	
	public function delete(){
		$amenityId = $this->input->get('id','');
		if($amenityId){			
			$this->amenitiesmodel->delete($amenityId);
			redirect('admin/amenities');	
		}
	}
	
	
	public function add(){
		$id= $this->input->get('id','');
		$data = array();
		if($id){
			$data['amenities_details'] = $this->amenitiesmodel->getAmenityById($id);
		}
		$this->load->view('admin/amenities/add', $data);
	}
	
	
	public function save(){				
			$data = array(			
			'amenities'  => $this->input->post('amenity')
			);
			//print_r($data);die();
			$amenityId = $this->input->post('id');
			if(empty($amenityId)){
				$this->amenitiesmodel->insertDetails($data);
			}else{
				$this->amenitiesmodel->updateDetails($data, $amenityId);
			}
			redirect('admin/amenities');		

	}	
	
}

	