<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
		$this->load->model('login_model');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
    }
	
	public function index(){

		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}
 
public function login_user(){

		$this->load->library(array('session','form_validation'));
		$this->form_validation->set_rules('correo','Email address', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('pass', 'Password', 'trim|required');
		
		if($this->form_validation->run() == false){
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('login');
			$this->load->view('templates/footer');
		}else{
			$result = $this->login_model->login_user();
			switch($result){
				case 'logged_in': redirect('/','Inicio');break;
				case 'incorrect_password':
				$this->load->view('templates/header');
				$this->load->view('templates/nav');
				$this->load->view('login');
				$this->load->view('templates/footer');break;
				case 'not_activated':
				$this->load->view('templates/header');
				$this->load->view('templates/nav');
				$this->load->view('login');
				$this->load->view('templates/footer');break;
				case 'email_not_found':
				$this->load->view('templates/header');
				$this->load->view('templates/nav');
				$this->load->view('login');
				$this->load->view('templates/footer');break;
			}
		}
	}
	
	public function token(){
		$token = md5(uniqid(rand(),true));
		$this->session->set_userdata('token',$token);
		return $token;
	}
	
	public function logout_ci(){
		$this->session->sess_destroy();
		$this->index();
	}
}
?>
