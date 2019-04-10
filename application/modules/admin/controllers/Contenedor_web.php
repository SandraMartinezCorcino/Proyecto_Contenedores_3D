<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contenedor extends MX_Controller {
    private $clase = "contenedor";

    public function __construct(){
        parent::__construct();
        $logged = $this->session->userdata('logged');
 
        if(!$logged){
            redirect();
        }

        $this->load->model('tbl_'.$this->clase,'obj_'.$this->clase);
        $this->load->model('tbl_tipo_contenedor','obj_tipo_contenedor');
		$this->load->library('Nusoap_library');
    }

	public function index(){
	$client = new SoapClient('http://192.168.1.18:81/SavarFerroles/Service1.asmx?WSDL');
    $result = $client->consultar();
	//$datos=array();

	
	  function obj2array($obj) {
	  $out = array();
	  foreach ($obj as $key => $val) {
	    switch(true) {
	        case is_object($val):
	         $out[$key] = obj2array($val);
	         break;
	      case is_array($val):
	         $out[$key] = obj2array($val);
	         break;
	      default:
	        $out[$key] = $val;
	    }
	  }
	  return $out;
	}
	
	$resultado = obj2array($result);
	//echo var_dump($resultado);
	
   /* foreach($resultado as $hijo){
	echo $hijo['nombre_contenedor'] ;
}*/
		
		
		
		
        $contenedor_all = $this->obj_contenedor->get_all_contenedor();
        $this->tmp_admin->set('contenedor_all',$contenedor_all);
       $this->tmp_admin->set('resultado',$resultado);
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
		$this->load->tmp_admin->render('contenedor/contenedor_view.php','contenedor');
	}

	/*public function Soapcliente(){
	


		

}*/
	
	
    public function agregar(){
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->form_validation->set_rules('nombre_contenedor', 'contenedor', 'trim|required');
        $this->form_validation->set_message('required', 'Este campo es requerido');

        if ($this->form_validation->run($this) == FALSE)
        {   
            $tipo_contenedor_all = $this->obj_tipo_contenedor->get_all_tipo_contenedor();
            $this->load->tmp_admin->set('tipo_contenedor_all',$tipo_contenedor_all);
            $this->load->tmp_admin->render('contenedor/contenedor_agregar_view.php','contenedor');
        }
        else
        {
            
            
            $datos_contenedor = array();
            $datos_contenedor['id_usuario']         = $this->session->userdata('id');
            $datos_contenedor['rfid_contenedor']    = $this->input->post('rfid_contenedor');
            $datos_contenedor['nombre_contenedor']  = $this->input->post('nombre_contenedor');
			$datos_contenedor['bl_master'] 		    = $this->input->post('bl_master');
            $datos_contenedor['tipo_contenedor']    = $this->input->post('tipo_contenedor');

            $this->obj_contenedor->insert_contenedor($datos_contenedor);

            redirect('admin/contenedor');
        }
    }

    public function editar($pk_contenedor){
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->form_validation->set_rules('nombre_contenedor', 'contenedor', 'trim|required');
        $this->form_validation->set_message('required', 'Este campo es requerido');
        
        if ($this->form_validation->run($this) == FALSE)
        {
            $contenedor = $this->obj_contenedor->get_all_contenedor($pk_contenedor);
            $tipo_contenedor_all = $this->obj_tipo_contenedor->get_all_tipo_contenedor();

            $this->load->tmp_admin->set('contenedor',$contenedor[0]);
            $this->load->tmp_admin->set('tipo_contenedor_all',$tipo_contenedor_all);
            $this->load->tmp_admin->render('contenedor/contenedor_editar_view.php','contenedor');
        }
        else
        {
            $datos_contenedor                       = array();
            $datos_contenedor['id_usuario']         = $this->session->userdata('id');
            $datos_contenedor['rfid_contenedor']    = $this->input->post('rfid_contenedor');
            $datos_contenedor['nombre_contenedor']  = $this->input->post('nombre_contenedor');
			$datos_contenedor['bl_master'] 		    = $this->input->post('bl_master');
            $datos_contenedor['tipo_contenedor']    = $this->input->post('tipo_contenedor');

            $this->obj_contenedor->editar_contenedor($datos_contenedor,$pk_contenedor);

            redirect('admin/contenedor');
        }
    }

    public function eliminar($pk_contenedor){
        $this->obj_contenedor->eliminar($pk_contenedor);
        redirect('admin/contenedor');
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */