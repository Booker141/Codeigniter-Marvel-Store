<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    
    function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario');
        $this->load->model('Articulo');
        $this->load->model('Carrito_model');
		$this->load->helper('security');
	}

	public function index()
	{
        $data['rol']=0;
        $data['user']=-1;
        $data['good_logged']=true;
        $this->load->view('templates/header',$data);
        $this->load->view('templates/nav');
		$this->load->view('inicio_view');
        $this->load->view('templates/footer');
    }
    
    function realiza_pedido()
	{
		$user = $this->uri->segment(3);
        $this->Carrito_model->pedido($user);
		redirect(base_url().'index.php/main/carrito/'.$user);
	}
    
    public function registro($page,$user)
	{
        $data = $this->Usuario->get_user($user);
        if(!$data){
            $data['articulo'] = $this->Articulo->obtener();
            $data['rol']=0;
            $data['user']=-1;
            $data['good_logged']=true;
            $this->load->view('templates/header',$data);
            $this->load->view('templates/nav');
            $this->load->view($page);
            $this->load->view('templates/footer');
        }else{
            $data['user']=$user;
            if(strcmp($page,'admin')==0){
                if($data['rol']){
                    $data2['articulo'] = $this->Articulo->obtener();
                    $data2['usuario']= $this->Usuario->obtener();

                    $this->load->view('templates/header',$data);
                    $this->load->view('templates/nav_admin');
                    $this->load->view('admin',$data2);
                    $this->load->view('templates/footer');
                }else{
                    $page='inicio_view';
                }
                
            }else{
                $data['articulo'] = $this->Articulo->obtener();
				$data['usuario']= $this->Usuario->obtener();
                $data['articulo_pedido']=$this->Carrito_model->get_productos($user);
                $data['precio_total']=$this->Carrito_model->get_total($user);
                $data['Cantidad']=$this->Carrito_model->get_cantidad($user);
                $data['good_logged']=true;
                $this->load->view('templates/header');
                $this->load->view('templates/nav',$data);
                $this->load->view($page,$data);
                $this->load->view('templates/footer');
            }
            
            
        }
	}
    
    function add_cart()
	{
		$user = $this->uri->segment(3);
        $Id_Articulo = $this->uri->segment(4);
        $this->Carrito_model->insert($user,$Id_Articulo);
		redirect(base_url().'index.php/main/inicio_view/'.$user);
	}
	
    
    
    public function admin(){
        $data2['articulo'] = $this->Articulo->obtener();
        $data2['usuario']= $this->Usuario->obtener();
        
        $data['rol']=1;
        $data['user']=2;
        $this->load->view('templates/header',$data);
        $this->load->view('templates/nav_admin');
		$this->load->view('admin',$data2);
        $this->load->view('templates/footer');
    }
    
    function cargar_archivo() {
        $nombre=$this->input->post('Titulo');
        $dep=$this->input->post('Id_Tipo');
        $desc=$this->input->post('Descripcion');
        $precio=$this->input->post('Precio');
        $stock=$this->input->post('Stock');
		$cuerpo=$this->input->post('Cuerpo');
        
        $mi_archivo = 'imagen';
        $config['upload_path'] = "images/";
        $config['file_name'] = $nombre;
        $config['allowed_types'] = "*";
        $config['max_size'] = "50000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload($mi_archivo)) {
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }
        $file_info = $this->upload->data();
        $imagen = $file_info['file_name'];
        
        $data = $this->Articulo->subir($nombre,$imagen,$dep,$desc,$precio,$stock,$cuerpo);
        redirect(base_url().'index.php/pages/admin');
    }

    function cambiar()
	{
		$id = $this->uri->segment(3);
		$this->Usuario->cambiar($id,$this->input->post('Id_Rol'));
		redirect(base_url().'index.php/pages/admin');
    }
    
    function borrar_articulo()
	{
		$id = $this->uri->segment(3);
		$delete = $this->Articulo->eliminar_producto($id);
        $file = "images/".$this->uri->segment(4);
        $do = unlink($file);

        if($do != true){
         echo "Hubo un error intentando eliminar el archivo." .$this->uri->segment(4) . "<br />";
         }
		redirect(base_url().'index.php/pages/admin');
	}
    
    function borrar_del_pedido()
	{
		$user = $this->uri->segment(3);
        $id = $this->uri->segment(4);
		$this->Carrito_model->eliminar_prod($id);
		redirect(base_url().'index.php/main/carrito/'.$user);
	}
    
    
   
    
    function cambia_cantidad(){
        $user = $this->uri->segment(3);
        $id = $this->uri->segment(4);
		$this->Carrito_model->cambia_cant($id,$this->input->post('Cantidad'));
		redirect(base_url().'index.php/main/carrito/'.$user);
    }
    
    
	function cambia_nombre(){
		$user = $this->uri->segment(3);
		$this->Usuario->cambiar_nombre($user,$this->input->post('nuevo_nombre'));
		redirect(base_url().'index.php/main/cuenta/'.$user);
	}
	
	function cambia_pass(){
		$user = $this->uri->segment(3);
		$this->Usuario->cambiar_pass($user,$this->input->post('nueva_pass'));
		redirect(base_url().'index.php/main/cuenta/'.$user);
	}
    
    function _create_thumbnail($archivo){
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/'.$archivo;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['new_image']='uploads/thumbs/';
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config); 
        $this->image_lib->resize();
    }
}
