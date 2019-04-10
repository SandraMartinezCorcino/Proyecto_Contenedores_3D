<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stock_ubicaciones extends MX_Controller {

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
        $this->load->model('tbl_mov_contenedor');
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->tmp_admin->render('stock_espacio_vacio_libre_view');
    }

    public function stock_total_espacios_vacios_ocupados() {
        
        $this->load->model('tbl_mov_contenedor');

        $data = $this->tbl_mov_contenedor->stock_total_espacios_vacios_ocupados();

        echo json_encode($data);
    }

    public function stock_espacios_vacios() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista=$this->tbl_mov_contenedor->stock_espacios_vacios();
        foreach ($lista as $row) {
            $i++;
              
            $tabla.= '{"id":"' . $i . '","BAHIA":"' . $row['BAHIA'] . '","CODIGO":"' . $row['CODIGO'].'" ,"FECHA":"' . $row['FECHA'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        
        echo '{"data":[' . $tabla . ']}';
    } 


     public function stock_espacios_ocupados() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista=$this->tbl_mov_contenedor->stock_espacios_ocupados();
        foreach ($lista as $row) {
            $i++;
              
            $tabla.= '{"id":"' . $i . '","BAHIA":"' . $row['BAHIA'] . '","CODIGO":"' . $row['CODIGO'].'" ,"FECHA":"' . $row['FECHA'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        
        echo '{"data":[' . $tabla . ']}';
    } 
    


 
    



}