<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stock extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->model('tbl_usuario', 'obj_usuario');
        $this->load->model('tbl_stock');
        if ($this->session->userdata('logged') != 'true') {
            redirect('login');
        }
    }

    public function index() {
        $data['stock'] = $this->tbl_stock->stock();
        $this->tmp_admin->set('stock', $data['stock']);
        $this->load->tmp_admin->render('stock_view', 'stock');
    }
    
         public function movimiento() {
        $stock = $this->tbl_stock->stock();
        $data = array('stock' => $stock);
        $this->load->view('stock_tabla_view', $data);
     
    }

    /* ==== STOCK - BAHIA - CONTENEDOR*/

    
    

}
