<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationController extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->library('email');
  }
	
	public function index()
	{	
		//$this->load->model('Welcome_model');
		$this->load->view('register_new');
	}

	public function register(){
		
		$this->load->model('Register_model');
		$this->Register_model->register();
		$this->load->view('success_message');
		$this->sendemail($this->input->post('c_mail'));
                      // successfully sent mail to user email
                      $this->load->view('success_message');
        }


	public function get_groups(){
		$this->load->model('Groups_model');
		$result = $this->Groups_model->get_groups_new();
		echo json_encode($result);
	}


public function sendemail($email){

    $to = $email;
    $subject = "Your Registration was Successfull";

    $message = "<html><head><head></head><body><p>Dear ".$this->input->post('c_name').",</p>
    
      <p> We are pleased to confirm that your registration has been submitted successfully and we will get back to you soon with regard to your registration status.</p>
     

      <p>Thank you for your interest to participate at the Nations Trust FinTecHack 2017 to be held on November 10, 2017 at Kaffeine Lab, Colombo 07, Sri Lanka.</p>
    

    <br/>
    <p>Best Regards,</p>
    <p>Team FinTecHack,</p>
    <p>Nations Trust Bank </p>
    </body></html>";

    $header = "From: FinTecHack <fintechack@fintechack.com>". "\r\n";
    $header .= "MIME-Version: 1.0"."\r\n";
    $header .= "Content-type: text/html"."\r\n";

    $retval = mail ($to,$subject,$message,$header);

    if( $retval == true ) {
      echo "Message sent successfully...";
    }else {
      echo "Message could not be sent...";
    }
    // configure the email setting      
  }


}
