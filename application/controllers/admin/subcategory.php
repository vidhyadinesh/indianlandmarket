<?php
class subcategory extends CI_controller{

//var $mcontents = array();

	public function __construct(){
		parent:: __construct();
		$this->load->model('subcategorymodel');
		$this->load->library("pagination");	
	}	
	

	public function listing($offset = 0){
		$count = $this->subcategorymodel->total_count();
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
		$config['base_url']= base_url().'index.php/admin/subcategory/listing'; 
		//$config['suffix'] = '?'.http_build_query($_GET, '', "&"); 
		$this->pagination->initialize($config);
		$this->data['paginglinks'] = $this->pagination->create_links();
        // Showing total rows count 
		if($this->data['paginglinks']!= '') {
		  $this->data['pagermessage'] = 'Showing '.((($this->pagination->cur_page-1)*$this->pagination->per_page)+1).' to '.($this->pagination->cur_page*$this->pagination->per_page).' of '.$this->pagination->total_rows;
		}  
		$sortField = $this->input->post('sort_field'); 
    	$subCategoryDetails = $this->subcategorymodel->getSubCategories($config["per_page"], $offset,$sortField);  
		
		//echo '<pre>';
		//print_r($propertyDetails);die();
		$this->data['subcategories']  = $subCategoryDetails;
		$data = $this->load->view("admin/subcategory/subcategories",$this->data, true);
		echo $data;
		
	}
	
	public function subcategories(){
		$this->data['adminname'] = $this->session->userdata('name');
		$this->data['adminemail'] = $this->session->userdata('email');
		$this->load->view('admin/subcategory/list', $this->data);
	}
	
	public function delete(){
		$subcategoryId = $this->input->get('id','');
		if($subcategoryId){			
			$this->subcategorymodel->delete($subcategoryId);
			redirect('admin/subcategories');	
		}
	}
	
	
	public function add(){
		$id= $this->input->get('id','');
		$data = array();
		if($id){
			$data['subcategory_details'] = $this->subcategorymodel->getSubcategoryById($id);
		}
		$this->load->model('categorymodel');
		$data['categories'] = $this->categorymodel->getCategories();
		$this->load->view('admin/subcategory/add', $data);
	}
	
	
	public function save(){				
			$data = array(
			'category_id'  => $this->input->post('category_id'),			
			'sub_category'  => $this->input->post('subcategory')
			);
			$subcategoryId = $this->input->post('id');
			if(empty($subcategoryId)){
				$this->subcategorymodel->insertDetails($data);
			}else{
				$this->subcategorymodel->updateDetails($data, $subcategoryId);
			}
			redirect('admin/subcategories');
	}
	
	
}

	