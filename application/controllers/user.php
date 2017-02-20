<?php
class User extends CI_controller{

var $mcontents = array();

	public function __construct(){
		parent:: __construct();
		//$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('usermodel');
		//$this->load->library('session');
		$this->load->model('propertymodel');
		$this->load->model('categorymodel');		
	}	
	
	public function index(){
		$data['username'] = $this->session->userdata('name');
		$data['countries'] = $this->propertymodel->getCountries();
		$data['states'] = $this->propertymodel->getStates();
		$data['districts'] = $this->propertymodel->getDistricts();
		$data['categories'] = $this->categorymodel->getCategories();
		$this->load->model('advertisementmodel');
		$data['advertisements'] = $this->advertisementmodel->getAdvertisementsByPage('home');
		$this->load->model('featuremodel');
		$data['home_features'] = $this->featuremodel->getAdvancedFeatures(1);
		$data['land_features'] = $this->featuremodel->getAdvancedFeatures(2);
		$data['project_features'] = $this->featuremodel->getAdvancedFeatures(3);
		$data['commercial_features'] = $this->featuremodel->getAdvancedFeatures(4);
		
		//$radians = $this->propertymodel->getpropsbyradius();
		//echo '<pre>';
		//print_r($radians);die();

		$this->load->view('index',$data);
	}
	
	
	public function register(){
		$this->load->view('user/register');
	}
	
	/*public function registration(){
		if($this->input->post('submit')){			
			$this->load->library('email');
			$this->email->set_mailtype("html");
			$this->email->from('anushma.ideoder@gmail.com', "IndianLandMarket");
			$this->email->to($this->input->post('email'));
			$this->email->subject("Your profile registered successfully");

            $message = "<p>Welcome to Indian Land Market</p>";
            $message .= "<p><a href='".site_url()."login"."'>Click here </a>if you want to login,
                        if not, then ignore</p>";
            $this->email->message($message);
			
			if($this->email->send()){
				$data = array(
				'first_name'=>$this->input->post('first_name'),
				'last_name'=> $this->input->post('last_name'),
				'email'=> $this->input->post('email'),
				'contact_no'=> $this->input->post('contact_number'),
				'password'=> md5($this->input->post('password')),
				//'confirm_password'=> md5($this->input->post('confirm_password')),
				'type'=> $this->input->post('type'),
				);
		
				$this->usermodel->register($data);
				redirect('login');
            }			
	
		}
	}*/
	
	public function registration(){
		if($this->input->post('submit')){
            $this->form_validation->set_rules('first_name', 'first_name', 'required');
            $this->form_validation->set_rules('last_name', 'last_name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('country_code', 'country_code', 'required');
            $this->form_validation->set_rules('contact_number', 'contact_number', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == TRUE){
			$verificationCode = random_string('alnum', 20);
			$toEmail = $this->input->post('email');
			$data = array(
				'first_name'=>$this->input->post('first_name'),
				'last_name'=> $this->input->post('last_name'),
				'email'=> $this->input->post('email'),
				'contact_no'=> $this->input->post('contact_number'),
				'password'=> md5($this->input->post('password')),
				'email_verification_code'=> $verificationCode,
				'type'=> $this->input->post('type'),
				'country_code'=> $this->input->post('country_code')
				);		
				$this->usermodel->register($data);
			    $this->sendVerificationEmail($toEmail,$verificationCode);

				//if($verify){
					//$data['verification_msg'] = "Please verify your email address for further proceedings";
					//$this->load->view('index.php', $data);

				//}
				$this->session->set_flashdata('message', 'Please verify your email address for further proceedings');
				redirect(site_url());
            }
		}
	}
	
	private function sendVerificationEmail($toEmail,$verificationCode){  
	  $this->usermodel->sendVerificationEmail($toEmail,$verificationCode);
    }	
	
	public function verify(){  
	  $verificationText = $this->input->get('code','');
	  $noRecords = $this->usermodel->verifyEmailAddress($verificationText);  
	  if ($noRecords > 0){
	   $error = "Email Verified Successfully!"; 
	   //add registration mail
	  }else{
	   $error = "Sorry Unable to Verify Your Email!"; 
	  }
	  $data['verification_msg'] = $error; 
	  $this->load->view('index.php', $data);   
	}
	
	public function loginview($msg=NULL){
		$data['msg'] = $msg;
		$this->load->view('user/login', $data);
	}
	
	public function login(){
		$userData = $this->usermodel->validate();
		if(!empty($userData)){
			$userDetails = array(
			'name' => $userData->first_name.' '. $userData->last_name,
			'loggedId'=> $userData->id,
			);
			$this->session->set_userdata($userDetails);
			//redirect(site_url());
                        if($userData->status){
				redirect('myaccount');
			}else{
				$msg = '<font color="#FF0000"> Please verify your Account. Check your registered email id before you login.</font>';
				$this->loginview($msg);
			}
		}else{
			$msg = '<font color="#FF0000"> Invalid username and password</font>';
			$this->loginview($msg);
			
		}
		
	}
	

	public function forgotPassword($msg=NULL){
		$data['msg'] = $msg;
		//$data['msg'] = $msg;
		//$this->template->set_template('default');
		//$this->template->write_view('content', 'user/recover', $data);
        //$this->template->render();
		$this->load->view('user/recover',$data);
	}
	
	public function recoverPassword(){
		if($this->input->post('submit')){
			 if($this->usermodel->email_exists()){
				$temp_pass = md5(uniqid()); 
            //send email with #temp_pass as a link
				$this->load->library('email');
				$this->email->set_mailtype("html");
				$this->email->from('anushma@ideoder.com', "Indian Land Market");
				$this->email->to($this->input->post('email'));
				$this->email->subject("Reset your Password");

            $message = "<p>This email has been sent as a request to reset our password</p>";
            $message .= "<p><a href='".site_url()."resetpassword/?token=".$temp_pass."'>Click here </a>if you want to reset your password,
                        if not, then ignore</p>";
            $this->email->message($message);
			
			if($this->email->send()){
                //$this->load->model('model_users');
                if($this->usermodel->temp_reset_password($temp_pass)){
/*
                    $this->template->set_template('default');
					$this->template->write_view('content', 'user/reset-email-msg', $this->mcontents);
        			$this->template->render();*/
        			$this->load->view('user/reset-email-msg',$this->mcontents);
                }
            }
            else{

            	$msg = '<font color="#FF0000"> Something went wrong </font>';
			    $this->forgotPassword($msg);

                	//echo "email was not sent, please contact your administrator";
            }

			 }		 
			
		}
	}
	
	public function resetPassword(){
		$token = $this->input->get('token','');
		if($this->usermodel->is_temp_pass_valid($token)){
			//$this->load->view('user/reset_password',$temp_pass);
			$data['token'] = $token;
			//$this->template->set_template('default');
			//$this->template->write_view('content', 'user/reset-password', $data);
        	//$this->template->render();
        	$this->load->view('user/reset-password',$data);
	
		}else{
			die("the key is not valid");    
		}

	}
	
	public function userPasswordReset(){
		if($this->input->post('submit')){
			$this->usermodel->update_password();

			//$this->template->set_template('default');
			//$this->template->write_view('content', 'user/reset-msg', $this->mcontents);
        	//$this->template->render();
        	$this->load->view('user/reset-msg',$this->mcontents);
		}
	}	

	public function emailExist(){
		$email = $this->input->post('email');
		$output = $this->usermodel->email_exists($email);
		if($output){
			echo "true";
		}else{
			echo "false";
		}
		
	}
	
	public function getAccountDetails(){
          if(!empty($this->session->userdata('loggedId'))){ 
		$data['account'] = $this->usermodel->getUserDetails($this->session->userdata('loggedId'));
		$this->load->model('advertisementmodel');
		$data['advertisements'] = $this->advertisementmodel->getAdvertisementsByPage('myaccount');
		$data['username'] = $this->session->userdata('name');		
		$this->template->set_template('default');
		$this->template->write_view('content', 'user/my-account', $data);
                $this->template->render();
         }else{
	    	redirect('login');
	    }
	}
	
	public function changePassword(){
			$loggedId = $this->session->userdata('loggedId');
			$currentpassword =  md5($this->input->post('current_password'));
			$newpassword = md5($this->input->post('new_password'));
			$loggedUserDetails = $this->usermodel->getUserDetails($loggedId);		
			if($loggedUserDetails['password'] == $currentpassword){
					echo 'true';
			}else{
					echo 'false';
			}					
	}
	
	public function updatePassword(){
		$loggedId = $this->session->userdata('loggedId');
		$newpassword = md5($this->input->post('new_password'));
		$this->usermodel->changePassword($loggedId,$newpassword);
	}
	
	public function contact(){
		$data['username'] = $this->session->userdata('name');
		$this->template->set_template('default');
		$this->template->write_view('content', 'user/contact', $data);
        $this->template->render();	
	}
	
	public function logout(){
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('loggedId');
		$this->session->sess_destroy();                
		redirect(site_url(),'refresh');
	}
	
	public function saveContact(){
		if($this->input->post('data')){
			parse_str($this->input->post('data'), $contactarray);
			$this->load->model('contactmodel');
			$this->contactmodel->sendcontactmail($contactarray);			
		}
	}
	
	public function checkemailexist(){
		$checkEmail = $this->usermodel->email_exists();
		if($checkEmail){
			 echo "false";
		}else{
			 echo "true";
		}
	}

	public function about(){
		//$this->load->view('about');
		$data['username'] = $this->session->userdata('name');
		$this->template->set_template('default');
		$this->template->write_view('content', 'about', $data);
        $this->template->render();
	}

	public function advertise(){
		//$this->load->view('advertise');
		$data['username'] = $this->session->userdata('name');
		$this->template->set_template('default');
		$this->template->write_view('content', 'advertise', $data);
        $this->template->render();
	}

	public function privacy(){
		//$this->load->view('privacy');
		$data['username'] = $this->session->userdata('name');
		$this->template->set_template('default');
		$this->template->write_view('content', 'privacy', $data);
        $this->template->render();
	}

	public function terms(){
		//$this->load->view('terms');
		$data['username'] = $this->session->userdata('name');
		$this->template->set_template('default');
		$this->template->write_view('content', 'terms', $data);
        $this->template->render();
	}

	public function tips(){
		//$this->load->view('tips');
		$data['username'] = $this->session->userdata('name');
		$this->template->set_template('default');
		$this->template->write_view('content', 'tips', $data);
        $this->template->render();
	}
	
	
	
}
