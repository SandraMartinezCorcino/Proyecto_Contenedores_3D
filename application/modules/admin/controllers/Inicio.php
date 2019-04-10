<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends MX_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('tbl_usuario','obj_usuario');

       if($this->session->userdata('logged') != 'true'){
           redirect('login');
        }
		
    }
	 
	 public function index() {
        $this->load->model('tbl_mov_contenedor');
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $data['mov_contenedor'] = $this->tbl_mov_contenedor->get_mov_contenedor();
        $this->tmp_admin->set('mov_contenedor', $data['mov_contenedor']);
        /*$bahia=$this->tbl_mov_contenedor->bahia_contenedores();
       $this->tmp_admin->set('bahia', $bahia);*/
        
        $this->load->tmp_admin->render('movimiento_contenedor_view', 'mov_contenedor');
        
    }
    
     public function movimiento() {
       $movimiento_contenedor = $this->tbl_mov_contenedor->get_mov_contenedor_10();
        $data = array('movimiento_contenedor' => $movimiento_contenedor);
        $this->load->view('movimiento_contenedor_tabla_view', $data);
     
    }
    

    /*public function logout(){                     
        $this->session->unset_userdata('logged');
        redirect('admin');
   }*/
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
 