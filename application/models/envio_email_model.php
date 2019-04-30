<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Envio_email_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->helper('security');
	}
	
	function new_user($correo,$pass,$usuario,$rol,$nombre){
       $data = array(
            'Nombre' => $nombre,
            'Correo' => $correo,
			'Usuario' => $usuario,
            'Contraseña' =>$pass,
            'Id_Rol' => $rol
        );
        $this->db->insert('usuario', $data);
        $insert_id = $this->db->insert_id();
        $data = array(
            'Id_Usuario' => $insert_id
        );
        $this->db->insert('carrito', $data);
        return  $insert_id;
    }
}