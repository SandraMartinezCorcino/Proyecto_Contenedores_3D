<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class buscador_A1 extends CI_Controller {
public function __construct(){
parent::__construct();
$this->load->model('tbl_buscador');
if($this->session->userdata('logged') != 'true'){
redirect('login');
   }
}

public function index(){

$this->load->tmp_admin->setLayout('templates/admin_tmp');	
$this->load->model('tbl_buscador');
$cod_bl_master = $this->input->post('bl_master');

 //IF ($cod_bl_master != NULL) {
    
 $data['bl_master'] = $this->tbl_buscador->localizar_contenedor_A1($cod_bl_master);
 
 $this->tmp_admin->set('bl_master', $data['bl_master']);
   
//var_dump($data);

 $this->tmp_admin->render('BAHIA_A_view_view','bl_master');



}

} 


















