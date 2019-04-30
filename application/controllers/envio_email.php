<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Envio_email extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('envio_email_model');	
	}
	function index(){
		$this->load->helper(array('form'));
		$this->load->library(array('form_validation'));
	 	$data['title'] = 'Formulario de registro';
		$data['head'] = 'Regístrate desde aquí';
        $data['rol']=0;
        $data['user']=-1;
        $data['good_logged']=true;
		$this->load->view('templates/header',$data);
		$this->load->view('templates/nav');
		$this->load->view('envio_email_view', $data);
		$this->load->view('templates/footer');
    }
	
	function nuevo_usuario(){
		
		if(isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
			
				$Nombre = $this->input->post('Nombre');
				$Correo = $this->input->post('Correo');
				$Id_Rol = $this->input->post('Id_Rol');
				$Contraseña = $this->input->post('Contraseña');
				$Usuario = $this->input->post('Usuario');
				$Id_Usuario = $this->envio_email_model->new_user($Correo,$Contraseña,$Nombre,$Id_Rol,$Usuario);
				$data['rol']=0;
				$data['user']=2;
                redirect(base_url().'index.php/main/inicio_view/'.$Id_Usuario);
							
		}
	}
}