<?php
class feature extends CI_controller{

//var $mcontents = array();

	public function __construct(){
		parent:: __construct();
		$this->load->model('featuremodel');
		$this->load->library("pagination");	
	}	
	

	public function listing($offset = 0){
		$count = $this->featuremodel->total_count();
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
		$config['base_url']= base_url().'admin/feature/listing'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->pagination->total_rows;
		}  
		$sortField = $this->input->post('sort_field'); 
    	$featureDetails = $this->featuremodel->getFeatureDetails($config["per_page"], $offset,$sortField);  

		$this->data['features']  = $featureDetails;
		$data = $this->load->view("admin/feature/features",$this->data, true);
		echo $data;
		
	}
	
	public function features(){
		$this->data['adminname'] = $this->session->userdata('name');
		$this->data['adminemail'] = $this->session->userdata('email');
		$this->load->view('admin/feature/list', $this->data);
	}
	
	public function delete(){
		$featureId = $this->input->get('id','');
		if($featureId){			
			$this->featuremodel->delete($featureId);
			redirect('admin/features');	
		}
	}
	
	
	public function add(){
		$id= $this->input->get('id','');
		$data = array();
		if($id){
			$data['feature_details'] = $this->featuremodel->getFeatureById($id);
		}
		$this->load->model('categorymodel');
		$data['categories'] = $this->categorymodel->getCategories();
		$this->load->view('admin/feature/add', $data);
	}
	
	
	public function save(){				
			$data = array(
			'category_id'  => $this->input->post('category_id'),			
			'feature'  => $this->input->post('feature')
			);

			$featureId = $this->input->post('id');
			if(empty($featureId)){
				$this->featuremodel->insertDetails($data);
			}else{
				$this->featuremodel->updateDetails($data, $featureId);
			}
			redirect('admin/features');		

	}
	
	
	
}

	