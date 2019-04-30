 <?
class Php extends CI_Controller {
    function login(){
        $this->load->helper('form');
        if(!isset($_POST['Correo'])){    
            $this->load->view('login');       
        }else{                         
            $this->form_validation->set_rules('correo','e-mail','required|valid_email');       
            $this->form_validation->set_rules('pass','password','required');
            if(($this->form_validation->run()==FALSE)){               
                $this->load->view('login');                            
            }else{                                                    
                $this->load->model('usuarios_model');
                $ExisteUsuarioyPassword=$this->usuarios_model->ValidarUsuario($_POST['correo'],$_POST['pass']);    
                if($ExisteUsuarioyPassword){   
                    $this->load->view('templates/header');
					$this->load->view('templates/nav_user');
					$this->load->view('inicio_view');
					$this->load->view('templates/footer');
					
                }else{ 
                    $data['error']="Correo o contraseña incorrectos.";
                    $this->load->view('login',$data);  
                }
            }
        }
    }
}
?> 