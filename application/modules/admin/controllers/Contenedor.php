<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contenedor extends MX_Controller {


    public function __construct(){ parent::__construct();
        
        $this->load->database();
        $this->load->model('tbl_usuario','obj_usuario');
   
         if($this->session->userdata('logged') != 'true'){
           redirect('login');
        }   
    }

	public function index(){
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->tmp_admin->render('contenedor_view');
	}
	
    public function get_contenedor() {
        $this->load->model('tbl_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_contenedor->get_contenedor();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master_cont":"' . $row['bl_master_cont'] . '","rfid_contenedor":"' . $row['rfid_contenedor'] . '","FECHA_VINCULACION":"' . $row['FECHA_VINCULACION'].'","rfid_contenedor_activo":"' . $row['rfid_contenedor_activo'].'","FECHA_VINCULACION_ACTIVO":"' . $row['FECHA_VINCULACION_ACTIVO'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        
        echo '{"data":[' . $tabla . ']}';
    }
	
    

   

   
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */