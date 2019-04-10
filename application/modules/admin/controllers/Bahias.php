<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bahias extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->model('tbl_usuario', 'obj_usuario');
        $this->load->model('Tbl_bahia');


        if ($this->session->userdata('logged') != 'true') {
            redirect('login');
        }
    }

    public function index() {
        $this->load->model('tbl_bahia');
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->tmp_admin->render('bahia_view');
        
    }
    
      public function get_bahia() {
        $this->load->model('tbl_bahia');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_bahia->VINCULACION_BAHIA();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","COD_BAHIA":"' . $row['COD_BAHIA'] . '","FECHA_VINCULACION_BAHIA":"' . $row['FECHA_VINCULACION_BAHIA'] . '","COD_RFID":"' . $row['COD_RFID'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

                        
 
    
  
    
   
    



    
    
    

  

}
