<?php
class Usuario extends CI_Model {
function __construct(){
    parent::__construct();
	$this->load->helper('security');
    }
    function get_user($user){
        $query = $this->db->query("SELECT Id_Rol FROM usuario WHERE Id=".$user);
        $row = $query->row_array();
        
        if($query->num_rows() > 0 )
        {
            if(strcmp ($row['Id_Rol'] , 1 ) == 0){
            $data['Id_Rol']=true;
            }else{
                $data['Id_Rol']=false;
            }
            return $data;
        }else{
            return false;
        }
    }
    
    function obtener(){
        $query = $this->db->query("SELECT * FROM usuario");
        return $query->result();
        
    }
    
    function cambiar($id,$rol){
        $data = array(
            'Id_Rol' => $rol,
        );
        $this->db->where('Id', $id);
        return $this->db->update('usuario', $data);
    }
	
	function cambiar_nombre($id, $nuevo_nombre){
		$data = array('Usuario' => $nuevo_nombre);
			$this->db->where('Id', $id);
			return $this->db->update('usuario', $data);
	}
	function cambiar_pass($id, $nueva_pass){
		$this->load->helper('security');
		$data = array(
			'pass' =>($nueva_pass));
			$this->db->where('Id', $id);
			return $this->db->update('usuario', $data);
	}
}
?>