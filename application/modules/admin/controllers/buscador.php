<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class buscador extends CI_Controller {
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


    
 $data['bl_master'] = $this->tbl_buscador->localizar_contenedor($cod_bl_master);
 
 $this->tmp_admin->set('bl_master', $data['bl_master']);
   


 $this->tmp_admin->render('buscador_view','bl_master');


  
}


   public function buscar_A1() {     
       
    $this->load->model('tbl_buscador');
    $this->load->model('tbl_mov_contenedor');

    $data = array(

                'bl_master' => $this->input->post('bl_master'), 

            

     ); 
       
   
   
    $datas=$this->tbl_buscador->buscador_A1($data);
    $size=sizeof($datas);
   
    if ($size!=0) {

    	
		  $maestro = $this->tbl_mov_contenedor->maestro_bahia_A($datas);
    	$data= array_merge($datas,$maestro);
    	echo json_encode($data);

    } else {

    	 $data = 'Contenedor no existente';

    	 echo json_encode($data);
    }
    
    //echo json_encode(array("status" => TRUE));
  	


  	//echo json_encode($data);




    

    }

} 


















