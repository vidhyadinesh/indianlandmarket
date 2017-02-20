<?php
class usermodel extends CI_model{
	public function __construct(){
		$this->load->database();
		//error_reporting(0);
	}
	
	public function register($data){
		$this->db->insert('user',$data);
	}
	
	public function validate(){
		$email = $this->input->post('email');//echo $email;//die();
		$password = md5($this->input->post('password'));//echo $password;die();
		
		$this->db->where('Email',$email);
		$this->db->where('Password',$password);
		$query = $this->db->get('user');
		return $query->row();		
	}
	public function email_exists(){//die('gh');
    $email = $this->input->post('email');//echo $email;die();
    $query = $this->db->query("SELECT email, password FROM user WHERE email='$email'");    
    if($row = $query->row()){
        return TRUE;
    }else{
        return FALSE;
    }
 }
 
 
 public function temp_reset_password($temp_pass){
    $data =array(
                'email' =>$this->input->post('email'),
                'token'=>$temp_pass);
                $email = $data['email'];

    if($data){
        $this->db->where('email', $email);
        $this->db->update('user', $data);  
        return TRUE;
    }else{
        return FALSE;
    }

}

public function is_temp_pass_valid($temp_pass){
    $this->db->where('token', $temp_pass);
    $query = $this->db->get('user');
    if($query->num_rows() == 1){
        return TRUE;
    }
    else return FALSE;
}

public function update_password(){
	$token = $this->input->post('token');
	$data = array('password'=> md5($this->input->post('new_password'))
);
	if($data){
        $this->db->where('token', $token);
        $this->db->update('user', $data); 
	}
	
}

 public function getUserDetails($userId){
	 $this->db->where('id', $userId);
     return $this->db->get('user')->row_array();
 }
 
 public function getUsers($limit=0, $start=0, $sortField=''){
		$this->db->select("*");
        //$this->db->join('category','category.id=property.category','left');
		//$this->db->join('prop_sub_category','prop_sub_category.id=property.sub_category','left');
		$type = $this->session->userdata('type');
		if($type == 'admin'){			
			$this->db->where('id !=',$this->session->userdata('loggedId'));
		}
		if($sortField){
            $this->db->order_by($sortField,'ASC');
        }
		$query = $this->db->limit($limit, $start);		
		
		$query = $this->db->get('user');
		//echo $this->db->last_query();die();
		return $query->result_array();
	}
	
	
	public function total_count() {
	  // $this->db->where('status', 0);
	  $type = $this->session->userdata('type');
	  if($type == 'admin'){			
			$this->db->where('id !=',$this->session->userdata('loggedId'));
	   }
       $query =  $this->db->get("user");
	   return $query->num_rows();
    }
	
	public function delete($userId){
		$this->db->where('id',$userId);
		$this->db->delete('user');
	}
	
	public function changePassword($loggedId,$newpassword){
		$this->db->set('password', $newpassword);
		$this->db->where('id', $loggedId);
        $this->db->update('user');
	}
	
	public function sendVerificationEmail($email,$verificationText){
  
	 /* $config = Array(
		 'protocol' => 'smtp',
		 'smtp_host' => 'smtp.gmail.com',
		 'smtp_port' => 465,
		 'smtp_user' => 'anushma.ideoder@gmail.com', // change it to yours
		 'smtp_pass' => 'nokiaN72@123', // change it to yours
		 'mailtype' => 'html',
		 'charset' => 'iso-8859-1',
		 'wordwrap' => TRUE
	  );*/

	  	$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from('anushma@ideoder.com', "Indian Land Market");
		$this->email->to($email);
		$this->email->subject("Email Verification");

	    $message = "<p>Welcome to Indian Land Market</p>";
	    $message .= "THANK YOU FOR REGISTERING WITH INDIAN LAND MARKET.<br/><a href='".site_url()."/verify?code=".$verificationText."'>Click here</a> to verify your account and enjoy our service.<br/><p>It is better to have something than Nothing. <p><a href='#' target='_blank'>Facebook</a> | <a href='#' target='_blank'>Twitter</a><p> - Team Ideoder</p>";
	    $this->email->message($message);
	    $this->email->send();
	  
	  
	  /*$this->load->library('email', $config);
	  $this->email->set_newline("\r\n");
	  $this->email->from('anushma.ideoder@gmail.com', "Admin Team");
	  $this->email->to($email);  
	  $this->email->subject("Email Verification");
	  $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://richinnovations.org/indianlandmarket/verifyemail/".$verificationText."\n"."\n\nThanks\nAdmin Team");
	  $this->email->send();*/
  
 }
 
 public function verifyEmailAddress($verificationcode){  
  $sql = "update user set status=1 WHERE email_verification_code=?";
  $this->db->query($sql, array($verificationcode));
  return $this->db->affected_rows(); 
 }
 
 
 public function sendapprovedmail($userdata){
  
	  /*$config = Array(
		 'protocol' => 'smtp',
		 'smtp_host' => 'smtp.gmail.com',
		 'smtp_port' => 465,
		 'smtp_user' => 'anushma.ideoder@gmail.com', // change it to yours
		 'smtp_pass' => 'nokiaN72@123', // change it to yours
		 'mailtype' => 'html',
		 'charset' => 'iso-8859-1',
		 'wordwrap' => TRUE
	  );
	  
	  
	  $this->load->library('email', $config);
	  $this->email->set_newline("\r\n");
	  $this->email->from('anushma.ideoder@gmail.com', "Admin Team");
	  $this->email->to($email);  
	  $this->email->subject("Property approved");
	  $this->email->message("Dear User,\nYour property hasbeen approved.\n"."\n\nThanks\nAdmin Team");
	  $this->email->send();*/

	$this->load->library('email');
	$this->email->set_mailtype("html");
	$this->email->from('anushma@ideoder.com', "Indian Land Market");
	$this->email->to($userdata['email']);
	$this->email->subject("Property Approved");

    $message = "<p>Property Approved</p>";
    $message .= "Dear ".$userdata['first_name'].", Your property hasbeen approved.<br/> Thanks Admin.";
    $this->email->message($message);
    $this->email->send();
  
 }

 
 	 
}
?>