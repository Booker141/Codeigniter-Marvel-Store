<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cuenta extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation', 'session'));
		$this->load->helper(array('url','form'));
		$this->load->model('Cuenta_model');
		
		$this->_salt = "19283746564738291";
	}
	
	function index(){
		
		if($this->account_model->logged_in() === TRUE){
				$this->load->view('templates/header');
				$this->load->view('templates/nav');
				$this->load->view('inicio_view');
				$this->load->view('templates/footer');
		}else{
			$this->load->view('login');
		}
	}
	
	function login(){
		$this->form_validation->set_rules('nombre', 'Nombre','xss_clean|required|callback_username_check');
		$this->form_validation->set_rules('pass', 'Pass', 'xss_clean|required|min_length[4]|max_length[16]|sha1|
		callback_password_check');
		$nombre = $this->input->post('nombre');
		$pass = $this->input->post('pass');
		if($this->form_validation->run()){
			$this->load->view('login#badlogin');
		}else{
            if($this->Cuenta_model->get_pass($nombre,$pass)){
                $this->Cuenta_model->login($nombre);
                $Id_Usuario=$this->Cuenta_model->get_user_id($nombre);
			    redirect(base_url().'index.php/main/inicio_view/'.$Id_Usuario);
            }else{
                
                $data['rol']=0;
				$data['user']=-1;
                $data['good_logged']=false;
            	$this->load->view('templates/header',$data);
            	$this->load->view('templates/nav',$data);
            	$this->load->view('inicio_view');
                $this->load->view('templates/footer');
            }
		}
		
	}
	
	
	function logout(){
		$this->session->sess_destroy();
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('inicio_view');
		$this->load->view('templates/footer');
		
	}
	
	function password_check(){
		$this->db->where('Usuario', $this->_nombre);
		$query = $this->db->get('usuario');
		$result = $query->row_array();
		
		if($result['Contraseña'] == $this->_pass){
			return TRUE;
		}
		if($query->num_rows() == 0){
			$this->form_validation->set_message('password_check', 'Ha habido un error');
			return FALSE;
		}
	}
	
	
	
	function user_exists($user){
		$query = $this->db->get_where('usuario', array('Usuario' => $user));
		if($query->num_rows() > 0){
			$this->form_validation->set_message('user_exists', 'El %s está en uso, por favor pruebe otro.');
			return FALSE;
		}
		$query->free_result();
		return TRUE;
	}
	
	function email_exists($email){
		$query = $this->db->get_where('usuario', array('Correo' => $email));
		if($query->num_rows() > 0){
			$this->form_validation->set_message('email_exists', 'El $s ya existe, por favor use uno diferente');
			return FALSE;
		}
		$query->free_result();
		return TRUE;
	}
	
	
	function Camisetas(){
		$this->load->model('Usuario');
        $this->_nombre = $this->input->post('Nombre');
		$user = $this->input->post('Usuario');
		$this->_pass = $this->input->post('Contraseña');
		$this->_rol = $this->input->post('Id_Rol');
		$page = 'Camisetas';
        if($this->Usuario->get_user($user)){
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_admin');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}else{
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_user');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}
    }
	
	function Tazas(){
		$this->load->model('Usuario');
        $this->_nombre = $this->input->post('Nombre');
		$user = $this->input->post('Usuario');
		$this->_pass = $this->input->post('Contraseña');
		$this->_rol = $this->input->post('Id_Rol');
		$page = 'Tazas';
        if($this->Usuario->get_user($user)){
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_admin');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}else{
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_user');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}
    }
	
	function Disfraces(){
		$this->load->model('Usuario');
        $this->_nombre = $this->input->post('Nombre');
		$user = $this->input->post('Usuario');
		$this->_pass = $this->input->post('Contraseña');
		$this->_rol = $this->input->post('Id_Rol');
		$page = 'Disfraces';
        if($this->Usuario->get_user($user)){
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_admin');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}else{
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_user');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}
    }
	
	function Peluches(){
		$this->load->model('Usuario');
        $this->_nombre = $this->input->post('Nombre');
		$user = $this->input->post('Usuario');
		$this->_pass = $this->input->post('Contraseña');
		$this->_rol = $this->input->post('Id_Rol');
		$page = 'Peluches';
        if($this->Usuario->get_user($user)){
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_admin');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}else{
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_user');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}
    }
	
	function Complementos(){
		$this->load->model('Usuario');
        $this->_nombre = $this->input->post('Nombre');
		$user = $this->input->post('Usuario');
		$this->_pass = $this->input->post('Contraseña');
		$this->_rol = $this->input->post('Id_Rol');
		$page = 'Complementos';
        if($this->Usuario->get_user($user)){
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_admin');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}else{
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_user');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}
	}

	function Otros(){
		$this->load->model('Usuario');
        $this->_nombre = $this->input->post('Nombre');
		$user = $this->input->post('Usuario');
		$this->_pass = $this->input->post('Contraseña');
		$this->_rol = $this->input->post('Id_Rol');
		$page = 'Otros';
        if($this->Usuario->get_user($user)){
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_admin');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}else{
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_user');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}
    }
	function mostrar_todos(){
		$this->load->model('Usuario');
        $this->_nombre = $this->input->post('Nombre');
		$user = $this->input->post('Usuario');
		$this->_pass = $this->input->post('Contraseña');
		$this->_rol = $this->input->post('Id_Rol');
		$page = 'mostrar_todos';
        if($this->Usuario->get_user($user)){
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_admin');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}else{
				
				$this->load->view('templates/header');
				$this->load->view('templates/nav_user');
				$this->load->view($page);
				$this->load->view('templates/footer');
			}
    }
	
	
	
	function rol_check(){
		$this->db->where('Nombre', $this->_nombre);
		$query = $this->db->get('usuario');
		$result = $query->row_array();
		
		if($result['Id_Rol'] == $this->_rol){
			return TRUE;
		}
		if($query->num_rows() == 0){
			$this->form_validation->set_message('rol_check', 'Ha habido un error');
			return FALSE;
		}
	}
	
	function login_admin(){
		$this->form_validation->set_rules('nombre', 'Nombre','xss_clean|required|callback_username_check');
		$this->form_validation->set_rules('pass', 'Pass', 'xss_clean|required|min_length[4]|max_length[16]|sha1|
		callback_password_check');
		$admin = $this->input->post('admin');
		$pass = $this->input->post('pass');
		
            if($admin == 'admin' && $pass=='adminlee'){

			    redirect(base_url().'index.php/main/admin/');
            }else{
                
            $data['rol']=1;
            $data['user']=-1;
            $data['good_logged']=true;
            $this->load->view('templates/header',$data);
            $this->load->view('templates/nav',$data);
            $this->load->view('inicio_view');
            $this->load->view('templates/footer');
            }
		}
}
?>
