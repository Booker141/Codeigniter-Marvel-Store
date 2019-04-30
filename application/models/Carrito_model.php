<?php
class Carrito_model extends CI_Model {
function __construct(){
    parent::__construct();
    }
    function insert($user,$Id_Articulo){
        $query = $this->db->query("SELECT max(Id) FROM carrito WHERE Id_Usuario=".$user);
        $row = $query->row_array();
        $data = array(
            'Id_Carrito' => $row['max(Id)'],
            'Id_Articulo' => $Id_Articulo,
            'Cantidad' => 1
        );
        return $this->db->insert('pedido', $data);
    }
    
    function get_productos($user){
        if($this->session->userdata('user') != ''){
            $query = $this->db->query("SELECT max(Id) FROM carrito WHERE Id_Usuario=".$user);
            $row = $query->row_array();
            $ultimo=$row['max(Id)'];
            $query = $this->db->query("select Titulo, Imagen, Descripcion, Precio, Cantidad, pedido.Id
				    from articulo,pedido,carrito 
				    where pedido.Id_Articulo = articulo.Id 
				     and pedido.Id_Carrito = carrito.Id
                     and carrito.Id =".$ultimo."
                     and carrito.Id_Usuario =".$user);
        return $query->result();
        } 
    }
    
    function get_total($user){
        if($this->session->userdata('user') != ''){
            $query = $this->db->query("SELECT max(Id) FROM carrito WHERE Id_Usuario=".$user);
            $row = $query->row_array();
            $ultimo=$row['max(Id)'];
            $query = $this->db->query("select sum(Precio*Cantidad)
				    from articulo,pedido,carrito 
				    where pedido.Id_Articulo = articulo.Id 
				        and pedido.Id_Carrito = carrito.Id
                        and carrito.Id =".$ultimo."
                        and carrito.Id_Usuario =".$user);
            $row = $query->row_array();
        
            if($query->num_rows() > 0 )
            {
                return $row['sum(Precio*Cantidad)'];
            }else{
                return 0;
            }
        }
    }
    
    function get_cantidad($user){
        if($this->session->userdata('user') != ''){
            $query = $this->db->query("SELECT max(Id) FROM carrito WHERE Id_Usuario=".$user);
            $row = $query->row_array();
            $ultimo=$row['max(Id)'];
            $query = $this->db->query("select count(pedido.Id_Articulo) FROM carrito, pedido WHERE carrito.Id = pedido.Id_Carrito
                and carrito.Id =".$ultimo."
                and carrito.Id_Usuario =".$user);
            $row = $query->row_array();
        
            if($query->num_rows() > 0 )
            {
                return $row['count(pedido.Id_Articulo)'];
            }else{
                return 0;
           }
        }
    }
    
    function pedido($user){
        $query = $this->db->query("SELECT max(Id) FROM carrito WHERE Id_Usuario=".$user);
        $row = $query->row_array();
        $ultimo = $row['max(Id)'];
        $query = $this->db->query("SELECT * FROM pedido WHERE Id_Carrito=".$ultimo);
        foreach ($query->result() as $row)
        {
            $articulo=$row->Id_Articulo;
            $cant=$row->Cantidad;
            $query2 = $this->db->query("SELECT Stock FROM articulo WHERE Id=".$articulo);
            $row2 = $query2->row_array();
            $stock=$row2['Stock'];
			
            $restante=$stock-$cantidad;
            $data = array(
                'Stock' => $restante
            );
			$data2 = array(
                'Stock' => 20
            );
			if($stock<=0){
				$this->db->where('Id', $articulo);
				$this->db->update('articulo', $data2);
				
			}else{
            $this->db->where('Id', $articulo);
            $this->db->update('articulo', $data);}
        }
		
		
        $data = array(
            'Id_Usuario' => $user
        );
        return $this->db->insert('carrito', $data);
    }
    
    function cambia_cant($id,$cant){
        $data = array(
            'Cantidad' => $cant,
        );
        $this->db->where('Id', $id);
        return $this->db->update('pedido', $data);
    }
    
    function eliminar_prod($Id){
        $this->db->where('Id',$Id);
		return $this->db->delete('pedido');
    }
}
?>