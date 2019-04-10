<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plano extends CI_Controller {
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
$this->tmp_admin->render('BAHIA_A_view');


  
}

public function maestro_plano() {     
     
    $this->load->model('tbl_buscador');
    $this->load->model('tbl_mov_contenedor');

    //$data = 'A1';
       
    $data = $this->tbl_mov_contenedor->maestro_plano();
   
    echo json_encode($data);

 

 }

 public function maestro_plano_ocupado() {     
       
    $this->load->model('tbl_buscador');
    $this->load->model('tbl_mov_contenedor');

    //$data = 'A1';
       
    $data = $this->tbl_mov_contenedor->maestro_plano();
   
    echo json_encode($data);

 

 }



} 










