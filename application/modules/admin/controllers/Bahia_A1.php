<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bahia_A1 extends CI_Controller {
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
//$cod_bl_master = 'A1';


    
 //$data['bl_master'] = $this->tbl_mov_contenedor->localizar_contenedor($cod_bl_master);
 
 //$this->tmp_admin->set('bl_master', $data['bl_master']);
   


 $this->tmp_admin->render('BAHIA_A_view');


  
}

public function maestro_bahia_A1() {     
       
    $this->load->model('tbl_buscador');
    $this->load->model('tbl_mov_contenedor');

    $data = 'A1';
       
    $data = $this->tbl_mov_contenedor->maestro_bahia_A_general($data);
   
    echo json_encode($data);

 
    
    //echo json_encode(array("status" => TRUE));
    


    //echo json_encode($data);
 }

public function informacion_bahia_A1() {     
       
    $this->load->model('tbl_buscador');
    $this->load->model('tbl_mov_contenedor');

    $data = 'A1';
       
    $data = $this->tbl_mov_contenedor->informacion_bahia_A_general($data);
   
    echo json_encode($data);
 }


} 

















