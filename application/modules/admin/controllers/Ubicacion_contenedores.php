<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ubicacion_contenedores extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->model('tbl_usuario', 'obj_usuario');
        // $this->load->model('tbl_sensorParser','obj_sensorParser');
        $this->load->model('tbl_almacen');
        if ($this->session->userdata('logged') != 'true') {
            redirect('login');
        }
    }

    public function index() {
        $data['almacenes'] = $this->tbl_almacen->get_union_almacen_mov_carga();
        $this->tmp_admin->set('almacen', $data['almacenes']);
        $this->load->tmp_admin->render('stock_view', 'stock');
    }

}
