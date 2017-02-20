<?php
class Advertisement extends CI_controller{

//var $mcontents = array();

	public function __construct(){
		parent:: __construct();
		$this->load->model('advertisementmodel');
		$this->load->library("pagination");		
	}
	
	public function listing($offset = 0){
		$count = $this->advertisementmodel->total_count();
		//$offset = $this->input->get('offset', 0);
				
		$offset = ($this->uri->segment(4) != '' ? $this->uri->segment(4): 0); 
		$config['total_rows'] =  $count;
		$config['per_page']= 10;
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 4;
		$config['base_url']= base_url().'admin/advertisement/listing'; 
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
    	$advertisementDetails = $this->advertisementmodel->getAdvertisements($config["per_page"], $offset,$sortField);  
		
		//echo '<pre>';
		//print_r($advertisementDetails);die();
		$this->data['advertisement']  = $advertisementDetails;
		$this->data['adminname'] = $this->session->userdata('name');
		$this->data['adminemail'] = $this->session->userdata('email');
		$this->load->view('admin/advertisement/list', $this->data);
		//$this->template->set_template('default');
		//$this->template->write_view('content', 'property/list', $this->data);
        //$this->template->render();		
	}	
		
	public function delete(){
		$advertisementId = $this->input->get('id');
		if($advertisementId){			
			$this->advertisementmodel->delete($advertisementId);
		}
		redirect('admin/advertisement/listing');
	}
	
	public function getPositionByPage(){
		$page = $this->input->post('page');
		$positions = $this->advertisementmodel->getpositionByPage($page);
		echo json_encode($positions);
	}
	
	public function add(){
		$id= $this->input->get('id','');
		$data = array();
		if($id){
			$data['advertisement_details'] = $this->advertisementmodel->getAdvById($id);
			if(!empty($data)){
				$positions = $this->advertisementmodel->getpositionByPage($data['advertisement_details']['page']);
				$data['positions'] = $positions;
			}
		}
		$this->load->view('admin/advertisement/add', $data);
	}
	
	public function save(){
		if(!empty($_FILES['image'])){	
			$config['upload_path'] = './uploads/advertisement';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']    = '500';
			$config['max_width']  = '2000';
			$config['max_height']  = '768';
 
			// You can give video formats if you want to upload any video file.
			 
			$this->load->library('upload', $config);
			 
			if ( ! $this->upload->do_upload('image'))
			{
			$error = $this->upload->display_errors();
			die($error);
			// uploading failed. $error will holds the errors.
			}
			else{
			$uploadData = $this->upload->data();			
			$data = array(			
			'page'  => $this->input->post('page'),
			'position'=> $this->input->post('position'),
			'link'=> $this->input->post('link'),
			'image' => $uploadData['file_name']
			);
			$advId = $this->input->post('id');
			//echo $advId;die();
			if(empty($advId)){//die('an');
				$this->advertisementmodel->insertDetails($data);
			}else{//die('re');
				$this->advertisementmodel->updateDetails($data, $advId);
			}		

			}
		}
	}
				

}
