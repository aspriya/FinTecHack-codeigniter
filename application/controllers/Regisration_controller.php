<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regisration_controller extends CI_Controller {
    
    public $data = array('loginerror' => "");

    public function __construct(){
      parent::__construct();
      $this->load->helper(array('form', 'url'));
      $this->load->library('email');
    }

    public function index()
    { 
      $token = $this->generate_auth_token();
      $this->load->model('Registration_model');
      $this->Registration_model->add_auth_token($token);
      $data['auth_token'] = $token;
      $this->load->view('index', $data);   
    }

    public function register(){
      $values = array(
        'auth_token' => $this->input->post('auth_token'),
        'group_name' => $this->input->post('group_name'),
        'university' => $this->input->post('university'),
        'members_count' => $this->input->post('members'),
        'idea_title' => $this->input->post('idea_title'),
        'idea_description' => $this->input->post('idea_description'),
        'terms_accept' => $this->input->post('terms_accept'),
        'leader_name' => $this->input->post('leader_name'),
        'leader_university_id' => $this->input->post('leader_university_id'),
        'leader_contact' => $this->input->post('leader_contact'),
        'leader_email' => $this->input->post('leader_email'),
        'leader_veg_non_veg' => $this->input->post('leader_veg_non_veg'),
        'leader_tshirt' => $this->input->post('leader_tshirt'),
        'member_2_name' => $this->input->post('member_2_name'),
        'member_2_university_id' => $this->input->post('member_2_university_id'),
        'member_2_contact' => $this->input->post('member_2_contact'),
        'member_2_email' => $this->input->post('member_2_email'),
        'member_2_veg_non_veg' => $this->input->post('member_2_veg_non_veg'),
        'member_2_tshirt' => $this->input->post('member_2_tshirt'),
        'member_3_name' => $this->input->post('member_3_name'),
        'member_3_university_id' => $this->input->post('member_3_university_id'),
        'member_3_contact' => $this->input->post('member_3_contact'),
        'member_3_email' => $this->input->post('member_3_email'),
        'member_3_veg_non_veg' => $this->input->post('member_3_veg_non_veg'),
        'member_3_tshirt' => $this->input->post('member_3_tshirt'),
        'member_4_name' => $this->input->post('member_4_name'),
        'member_4_university_id' => $this->input->post('member_4_university_id'),
        'member_4_contact' => $this->input->post('member_4_contact'),
        'member_4_email' => $this->input->post('member_4_email'),
        'member_4_veg_non_veg' => $this->input->post('member_4_veg_non_veg'),
        'member_4_tshirt' => $this->input->post('member_4_tshirt')
        );
      $this->load->model('Registration_model');
      $result = $this->Registration_model->insert_group_and_members($values);
      $file_upload = $this->input->post('file_upload');
      $this->load->model('Welcome_model');
      $data['registered_count'] = $this->Welcome_model->registered_count();
      $config['upload_path']   = './uploads/';
      $config['allowed_types'] = 'pdf';

      $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('file_upload'))
          {
                  $error = array('error' => $this->upload->display_errors());
                  $this->load->view('welcome_message', $data);
          }
          else
          {
                  $data = array('upload_data' => $this->upload->data());
                  
                  if($this->sendemail($this->input->post('leader_email'))){
                    // successfully sent mail to user email
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">ThaNks! A mail is sent to your leader with requried details</div>');
                    $this->load->view('welcome_message', $data);
                  }else{
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Please try again ...</div>');
                    redirect(base_url());
                  }

                  
          }

    }

    private function generate_auth_token(){

      $hex   = uniqid("", true);
      return $hex;
    }

    public function validate_credentials()
    { 
      
    	$this->form_validation->set_rules('name', 'Username', 'required');  
      $this->form_validation->set_rules('password', 'Password', 'required');
      if($this->form_validation->run())  
           {   
                $name = $this->input->post('name');  
                $password = $this->input->post('password');  
                $this->load->model('login_model');  
                if($this->login_model->credintials_from_db($name, $password))  
                {  
                     
                     if($this->login_model->check_if_admin($name))
                     {
                        $_SESSION['admin'] = true;
                     }
                     else{
                        $_SESSION['admin'] = false;
                     }

                     $_SESSION['current_user'] = $name;
                     redirect(base_url() . 'home');  
                }  
                else  
                {    
                     $data['loginerror'] = "Username or password incorrect";
                     $this->load->view('login_view',$data);  
                }  
           }  
           else  
           {  
                //false  
                $data['loginerror'] = "Username or password incorrect";
                $this->load->view('login_view', $data);   
           }  
    }

    public function logout()
    {
      unset($_SESSION['current_user']);
      unset($_SESSION['admin']);
      redirect(base_url());
    }

    function sendemail($email){
    // configure the email setting
      $config['protocol'] = 'smtp';
      $config['smtp_host'] = 'ssl://smtp.fintechhack.lk'; //smtp host name
      $config['smtp_port'] = '465'; //smtp port number
      $config['smtp_user'] = 'fintechhacklk@fintechack.com';
      $config['smtp_pass'] = 'fintechhacklk'; //$from_email password
      $config['mailtype'] = 'html';
      $config['charset'] = 'iso-8859-1';
      $config['wordwrap'] = TRUE;
      $config['newline'] = "\r\n"; //use double quotes
      $this->email->initialize($config);
      $this->email->from('fintechhacklk@fintechack.com', 'fintechack');
      $this->email->to($email); 
      $this->email->subject('Your Registration was Successfull');
      $message = "<html><head><head></head><body><p>Hi,</p><p>Thanks for registration with Fintechack.</p><p>We will send you a mail with all the details regarding the hackothon once we finish processing your registration details.</p>".$url."<br/><p>Sincerely,</p><p>CodesQuery Team</p></body></html>";
      $this->email->message($message);
      return $this->email->send();
    }
    
}