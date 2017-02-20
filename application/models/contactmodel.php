<?php
class contactmodel extends CI_model{
	public function __construct(){
		$this->load->database();
	}	
	
	public function sendcontactmail($data){
		$config = Array(
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
	  $this->email->subject($data['subject']);
	  //$this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://richinnovations.org/indianlandmarket/index.php/verifyemail/".$verificationText."\n"."\n\nThanks\nAdmin Team");
	  $this->email->message("Dear Admin,\n".$data['message']."\n"."\n\nThanks\n".$data['author']);
	  $this->email->send();
	}
	
}
?>