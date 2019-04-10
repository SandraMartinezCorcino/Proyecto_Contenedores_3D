<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Almacen extends MX_Controller {
    private $clase = "almacen";

    public function __construct(){
        parent::__construct();
        $logged = $this->session->userdata('logged');
 
        if(!$logged){
            redirect();
        }

        $this->load->model('tbl_'.$this->clase,'obj_'.$this->clase);
        $this->load->model('tbl_estado','obj_estado');
        $this->load->tmp_admin->setLayout('templates/maestro_tmp');

        $this->estados = $this->obj_estado->get_all_estado();
    }

	public function index(){
        $almacen_all = $this->obj_almacen->get_all_almacen();
        $this->load->tmp_admin->set('almacen_all',$almacen_all);
		$this->load->tmp_admin->render('almacen/almacen_view.php','almacen');
	}

    public function agregar(){
        $this->form_validation->set_rules('nombre_almacen', 'almacen', 'trim|required');

        $this->form_validation->set_message('required', 'Este campo es requerido');
        if ($this->form_validation->run($this) == FALSE)
        {
            $this->load->tmp_admin->render('almacen/almacen_agregar_view.php','almacen');
        }
        else
        {
            $datos_almacen = array();
            $datos_almacen['nombre_almacen']         = $this->input->post('nombre_almacen');

            $this->obj_almacen->insert_contenedor($datos_almacen);

            redirect('admin/almacen');
        }
    }

    public function editar($pk_almacen){
        $this->form_validation->set_rules('nombre_almacen', 'almacen', 'trim|required');

        $this->form_validation->set_message('required', 'Este campo es requerido');
        if ($this->form_validation->run($this) == FALSE)
        {
            $almacen = $this->obj_almacen->get_almacen($pk_almacen);
            $this->load->tmp_admin->set('almacen',$almacen);
            $this->load->tmp_admin->set('estados',$this->estados);

            $this->load->tmp_admin->render('almacen/almacen_editar_view.php','almacen');
        }
        else
        {
            $datos_almacen = array();
            $datos_almacen['nombre_almacen']    = $this->input->post('nombre_almacen');
            $datos_almacen['ubicacion']         = $this->input->post('ubicacion');
            $datos_almacen['stock']         = $this->input->post('stock');

            $this->obj_almacen->editar_almacen($datos_almacen,$pk_almacen);

            redirect('admin/almacen');
        }
    }

    public function eliminar($pk_almacen){
        $this->obj_almacen->eliminar($pk_almacen);
        redirect('admin/almacen');
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */