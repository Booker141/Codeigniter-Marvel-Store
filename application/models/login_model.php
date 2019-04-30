<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function login_user(){
		$correo = $this->input->post('correo');
		$pass = $this->input->post('pass');
		
		$sql = "SELECT Nombre, Correo, Usuario, Contraseña, Id_Rol FROM usuario WHERE Correo= '($correo)' LIMIT 1";
		$result = $this->db->query($sql);
		$row = $result->row();
		
		if($result->num_rows() == 1){
			if($row->activated){
				if($row->pass == $pass){
					$session_data = array(
					'Nombre' => $row->Nombre,
					'Contraseña' => $row->Contraseña,
					'Correo' => $row->Correo,
					'Id_Rol' => $row->Id_Rol,
					'Usuario' => $row->Usuario);
					$this->set_session($session_data);
					return 'logged_in';
				}else{
					return 'incorrect_password';
				}
			}else{
				return 'not_activated';
			}
		}else{
			return 'email_not_found';
		}
	}
	
	private function set_session($session_data){
		$sess_data = array(
		'Nombre' => $session_data['Nombre'],
		'Contraseña' => $session_data['Contraseña'],
		'Id_Rol' => $session_data['Id_Rol'],
		'Correo' => $session_data['Correo'],
		'logged_in' => 1);
		$this->session->set_userdata($sess_data);
	}
	
	
}