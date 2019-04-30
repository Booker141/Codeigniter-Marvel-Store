 <?php
class Usuarios_model extends CI_Model{
    function ValidarUsuario($correo,$pass){   
        $this->db->where('Correo',$correo);   
        $this->db->where('Contraseña',$pass);
        $query = $this->db->get('usuario');
		if($query->num_rows() > 0){
			return true;
		}else{return false;}
    }
	
	function existe_email($correo){
		$this->db->select('Correo');
		$this->db->where('Correo', $correo);
		$query=$this->db->get('usuario');
		if($query->num_rows() > 0){
			return true;
		}else{return false;}
	}
}
?> 