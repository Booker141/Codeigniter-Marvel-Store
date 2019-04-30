<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Inicio extends CI_Controller{
	private $logged_in;
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		if($this->session->user_data('logged_in')){
			$this->logged_in = true;
		}else{
			$this->logged_in = false;
		}
	}
	
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('inicio_view', array('logged_in' => $this->logged_in));
		$this->load->view('templates/footer');
	}
}