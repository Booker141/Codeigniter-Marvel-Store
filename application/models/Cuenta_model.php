<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cuenta_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function create($data){
		if($this->db->insert('usuario', $data)){
			return TRUE;
		}
		return FALSE;
	}
	
	function login($nombre){
		$data= array('usuario' => $nombre, 'logged_in' => TRUE);
		$this->session->set_userdata($data);
	}
	
	function logged_in(){
		if($this->session->userdata('logged_in') == TRUE){
			return TRUE;
		}
		return FALSE;
	}
	
	public function login2($nombre, $pass){
		$this->db->where('usuario',$nombre);
		$this->db->where('contraseña', $pass);
		$query=$this->db->get('usuario');
		if($query->num_rows() > 0){
			return true;
		}else{return false;}
	}
	
	function get_pass($user, $pass){
        $query = $this->db->query("SELECT Contraseña FROM usuario WHERE nombre='$user'");
        
        $row = $query->row_array();
        if($query->num_rows() > 0 )
        {
            if(strcmp ($row['Contraseña'] , $pass ) == 0){
				return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    function get_user_id($user){
        $query = $this->db->query("SELECT Id FROM usuario WHERE nombre='$user'");
        $row = $query->row_array();
        if($query->num_rows() > 0 )
        {
            return $row['Id'];
        }else{
            return -1;
        }
    }
}
?>