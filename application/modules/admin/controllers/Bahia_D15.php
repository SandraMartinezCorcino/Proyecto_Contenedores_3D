<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bahia_D15 extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->model('tbl_mov_contenedor');
if($this->session->userdata('logged') != 'true'){
redirect('login');
   }
}

public function index(){

$this->load->tmp_admin->setLayout('templates/admin_tmp');	
$this->load->model('tbl_mov_contenedor');

   
 $this->tmp_admin->render('BAHIA_D15_view');


  
}
 
public function maestro_bahia_D15() {     
       
    $this->load->model('tbl_buscador');
    $this->load->model('tbl_mov_contenedor');

    $data = 'D15';
       
    $data = $this->tbl_mov_contenedor->maestro_bahia_A_general($data);
   
    echo json_encode($data);

 }

public function informacion_bahia_D15() {     
       
    $this->load->model('tbl_buscador');
    $this->load->model('tbl_mov_contenedor');

    $data = 'D15';
       
    $data = $this->tbl_mov_contenedor->informacion_bahia_A_general($data);
   
    echo json_encode($data);
 }


} 

















