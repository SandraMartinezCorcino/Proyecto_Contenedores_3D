<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Flag extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->model('tbl_flag');
if($this->session->userdata('logged') != 'true'){
redirect('login');
   }
}

public function index(){

$this->load->tmp_admin->setLayout('templates/admin_tmp');

 $this->load->model('tbl_flag');



//$data= $this->input->post('BL_MASTER');

//SELECCIONAR 
 $cod_bl=$this->input->post('BL_MASTER');
 $flag=$this->tbl_flag->localizar_contenedor($cod_bl);

//var_dump($flag);
//var_dump($cod_bl);
IF (empty($flag)) {
$data= array('mensaje' => "VIN equivocado");
$this->tmp_admin->set('mensaje', $data['mensaje']);
$this->load->tmp_admin->render('flag_view', 'mensaje');

}
ELSE {
$data = array(
 	'bl_master_cont' => $this->input->post('BL_MASTER')
);

$this->tbl_flag->buscar_contenedor($data);
$this->load->tmp_admin->render('flag_view',$data);
}

} 
}


















