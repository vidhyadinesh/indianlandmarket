<?php
class Property extends CI_controller{

//var $mcontents = array();

	public function __construct(){
		parent:: __construct();
		$this->load->model('propertymodel');
		$this->load->library("pagination");		
	}
	
	public function listing($offset = 0){
		$type = $this->session->userdata('type');
		$count = $this->propertymodel->total_count($type);
		//$offset = $this->input->get('offset', 0);
				
		$offset = ($this->uri->segment(4) != '' ? $this->uri->segment(4): 0); //echo $offset;
		$config['total_rows'] =  $count;
		$config['per_page']= 5;
		$perpage = $this->input->post('perpage');  
		if($perpage){
			$config['per_page'] = $perpage;
		}
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 4;
		$config['base_url']= base_url().'admin/property/listing'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {			
			$totalRows = $this->pagination->total_rows;
			$paging = $this->pagination->cur_page*$this->pagination->per_page;
			if($paging > $totalRows){
				$paging = $totalRows;
			}
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($paging).' of '.$totalRows;
		}  
		$sortField = $this->input->post('sort_field'); 
    	$propertyDetails = $this->propertymodel->getProperties($config["per_page"], $offset,$sortField,$type);  
		foreach($propertyDetails as $key => $val){
			$category = $propertyDetails[$key]['category'];
			if($category == 1){
				$this->load->model('prophomefeaturemodel');
				$propDetails = $this->prophomefeaturemodel->getDetails($val['id']);
			}elseif($category == 2){
				$this->load->model('proplandfeaturemodel');
				$propDetails =  $this->proplandfeaturemodel->getDetails($val['id']);
			}elseif($category == 3){
				$this->load->model('propprojectfeaturemodel');
				$propDetails =  $this->propprojectfeaturemodel->getDetails($val['id']);
			}elseif($category == 4){
				$this->load->model('propcommercialfeaturemodel');
				$propDetails =  $this->propcommercialfeaturemodel->getDetails($val['id']);
			}
			$propertyDetails[$key]['prop_features'] = $propDetails;			
		}
		//echo '<pre>';
		//print_r($propertyDetails);die();
		$this->data['properties']  = $propertyDetails;
		//$this->data['adminname'] = $this->session->userdata('name');
		//$this->data['adminemail'] = $this->session->userdata('email');
		//$this->load->view('admin/property/list', $this->data);
		
		$data = $this->load->view("admin/property/properties",$this->data, true);
		echo $data;
		
	}
	
	public function properties(){
		$this->data['adminname'] = $this->session->userdata('name');
		$this->data['adminemail'] = $this->session->userdata('email');
		$this->load->view('admin/property/list', $this->data);
	}
	
	public function changeStatus(){
		$propertyId = $this->input->post('property_id');
		if($propertyId){	
			$userdata = $this->propertymodel->getUserDetailsByPropId($propertyId);		
			$this->propertymodel->updateStatus($propertyId);
			$this->load->model('usermodel');
			$this->usermodel->sendapprovedmail($userdata);
		}
	}
	
	public function delete(){
		$propertyId = $this->input->post('property_id');
		if($propertyId){			
			$this->propertymodel->delete($propertyId);
		}
	}


	public function pendinglist($offset = 0){
		//$type = $this->session->userdata('type');
		$count = $this->propertymodel->pendingproperties_count();
		//$offset = $this->input->get('offset', 0);
				
		$offset = ($this->uri->segment(4) != '' ? $this->uri->segment(4): 0); //echo $offset;
		$config['total_rows'] =  $count;
		$config['per_page']= 5;
		$perpage = $this->input->post('perpage');  
		if($perpage){
			$config['per_page'] = $perpage;
		}
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 4;
		$config['base_url']= base_url().'admin/property/pendinglist'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {			
			$totalRows = $this->pagination->total_rows;
			$paging = $this->pagination->cur_page*$this->pagination->per_page;
			if($paging > $totalRows){
				$paging = $totalRows;
			}
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($paging).' of '.$totalRows;
		}  
		$sortField = $this->input->post('sort_field'); 
    	$propertyDetails = $this->propertymodel->getPendingProperties($config["per_page"], $offset,$sortField);  
		/*foreach($propertyDetails as $key => $val){
			$category = $propertyDetails[$key]['category'];
			if($category == 1){
				$this->load->model('prophomefeaturemodel');
				$propDetails = $this->prophomefeaturemodel->getDetails($val['id']);
			}elseif($category == 2){
				$this->load->model('proplandfeaturemodel');
				$propDetails =  $this->proplandfeaturemodel->getDetails($val['id']);
			}elseif($category == 3){
				$this->load->model('propprojectfeaturemodel');
				$propDetails =  $this->propprojectfeaturemodel->getDetails($val['id']);
			}elseif($category == 4){
				$this->load->model('propcommercialfeaturemodel');
				$propDetails =  $this->propcommercialfeaturemodel->getDetails($val['id']);
			}
			$propertyDetails[$key]['prop_features'] = $propDetails;			
		}*/

		$this->data['properties']  = $propertyDetails;
		
		$data = $this->load->view("admin/property/pending-properties",$this->data, true);
		echo $data;
		
	}
	
	public function pendingProperties(){
		$this->data['adminname'] = $this->session->userdata('name');
		$this->data['adminemail'] = $this->session->userdata('email');
		$this->load->view('admin/property/pending-list', $this->data);
	}

	public function bulkapprove(){
		$propertyIds = $this->input->post('property_ids');
		foreach($propertyIds as $propId){
			$this->propertymodel->updateStatus($propId);
		}
	}

	public function bulkdelete(){
		$propertyIds = $this->input->post('property_ids');
		foreach($propertyIds as $propId){
			$this->propertymodel->delete($propId);
		}
	}
	

}
