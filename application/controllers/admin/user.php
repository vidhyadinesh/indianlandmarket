<?php
class User extends CI_controller{

//var $mcontents = array();

	public function __construct(){
		parent:: __construct();
		$this->load->model('usermodel');
		$this->load->library("pagination");	
	}	
	
	/*public function index(){
		$data['username'] = $this->session->userdata('name');
		$this->load->view('index',$data);
	}*/	
	
	public function index($msg=NULL){
		$data['msg'] = $msg;
		$this->load->view('admin/sign-in', $data);
	}
	
	public function login(){
		$userData = $this->usermodel->validate();
		if(!empty($userData)){
			$userDetails = array(
			'name' => $userData->first_name.' '. $userData->last_name,
			'email' => $userData->email,
			'loggedId'=> $userData->id,
			'type' => $userData->type,
			);
			$this->session->set_userdata($userDetails);
			redirect('admin/home');
			//$this->load->view('user/dashboard',$userDetails);
		}else{
			$msg = '<font color="#FF0000"> Invalid username and password</font>';
			$this->index($msg);
		}
		
	}
	
	public function home(){
		$data = array(
		'adminname' => $this->session->userdata('name'),
		'adminemail' => $this->session->userdata('email')
		);
		$this->load->view('admin/dashboard',$data);
	}
	

	public function forgotPassword(){
		$this->load->view('user/recover');
	}
	
	public function recoverPassword(){
		if($this->input->post('submit')){
			 if($this->usermodel->email_exists()){
				$temp_pass = md5(uniqid()); 
            //send email with #temp_pass as a link
				$this->load->library('email', array('mailtype'=>'html'));
				$this->email->from('anushma.ideoder@gmail.com', "Site");
				$this->email->to($this->input->post('email'));
				$this->email->subject("Reset your Password");

            $message = "<p>This email has been sent as a request to reset our password</p>";
            $message .= "<p><a href='".base_url()."/home/reset_password/".$temp_pass."'>Click here </a>if you want to reset your password,
                        if not, then ignore</p>";
            $this->email->message($message);
			
			if($this->email->send()){
                $this->load->model('model_users');
                if($this->usermodel->temp_reset_password($temp_pass)){
                    echo "check your email for instructions, thank you";
                }
            }
            else{
                echo "email was not sent, please contact your administrator";
            }

			 }		 
			
		}
	}
	
	public function reset_password($temp_pass){
		if($this->usermodel->is_temp_pass_valid($temp_pass)){
			$this->load->view('user/reset_password',$temp_pass);
	
		}else{
			die("the key is not valid");    
		}

	}
	
	public function user_password_reset(){
		if($this->input->post('submit')){
			$this->usermodel->update_password();
			die('success');//redirect login 
		}
	}
	
	public function listing($offset = 0){
		$count = $this->usermodel->total_count();
		//$offset = $this->input->get('offset', 0);
				
		$offset = ($this->uri->segment(4) != '' ? $this->uri->segment(4): 0); 
		$config['total_rows'] =  $count;
		$config['per_page']= 10;
		$perpage = $this->input->post('perpage');  
		if($perpage){
			$config['per_page'] = $perpage;
		}
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['uri_segment'] = 4;
		$config['base_url']= base_url().'admin/user/listing'; 
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
    	$userDetails = $this->usermodel->getUsers($config["per_page"], $offset,$sortField);  
		
		//echo '<pre>';
		//print_r($propertyDetails);die();
		$this->data['users']  = $userDetails;
		$data = $this->load->view("admin/user/users",$this->data, true);
		echo $data;
		
	}
	
	public function users(){
		$this->data['adminname'] = $this->session->userdata('name');
		$this->data['adminemail'] = $this->session->userdata('email');
		$this->load->view('admin/user/list', $this->data);
	}
	
	public function delete(){
		$userId = $this->input->post('user_id');
		if($userId){			
			$this->usermodel->delete($userId);
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('loggedId');
		$this->session->sess_destroy();
		redirect('admin');
	}	
	
}

	