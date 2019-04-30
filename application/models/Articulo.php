<?php
class Articulo extends CI_Model {
    function __construct(){
        parent::__construct();
    }
    
    function subir($Titulo,$Imagen,$Id_Tipo,$Descripcion,$Precio,$Stock,$Cuerpo)
    {
        $data = array(
            'Id_Tipo' => $Id_Tipo,
            'Titulo' => $Titulo,
            'Descripcion' => $Descripcion,
            'Cuerpo' => $Cuerpo, 
            'Imagen'=> $Imagen,
            'Precio' => $Precio,
            'Stock' => $Stock
        );
        return $this->db->insert('articulo', $data);
    }
    
    function obtener(){
        $query = $this->db->query("SELECT * FROM articulo");
        return $query->result();   
    }
    
    function eliminar_producto($id)
	{
		$this->db->where('Id',$id);
		return $this->db->delete('articulo');
	}
}
?>