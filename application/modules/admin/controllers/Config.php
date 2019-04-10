<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Config extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        if ($this->session->userdata('logged') != 'true') {
            redirect('login');
        }


        if ($this->session->userdata('logged') != 'true') {
            redirect('login');
        }
    }

    public function index() {
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->tmp_admin->render('config_view');
    }
    
    public function config_ip(){
        
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->tmp_admin->render('config_ip_view');
    }

    public function insertar() {
 $data=array(
        'usuario'=>"hvy",
        'contrasena'=>$this->input->post('contrasena'),
        'perfil'=>$this->input->post('perfil'),
        );
        
    //  var_dump($data);
$this->load->model('tbl_usuarios');
$this->tbl_usuarios->insertar($data);
$this->load->view('config_view.php', $data);
}

}
