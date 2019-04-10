<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carga_Suelta extends MX_Controller {
    private $clase = "carga_suelta";

    public function __construct(){
        parent::__construct();
        $logged = $this->session->userdata('logged');
 
        if(!$logged){
            redirect();
        }

        $this->load->model('tbl_'.$this->clase,'obj_'.$this->clase);
    }

	public function index(){
      $this->load->model('tbl_carga_suelta');

        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $data['carga_suelta_all_10'] = $this->tbl_carga_suelta->get_all_carga_suelta_10();
        $this->load->tmp_admin->set('carga_suelta_all_10',  $data['carga_suelta_all_10']);
		$this->load->tmp_admin->render('carga_suelta/carga_suelta_view.php', $data);
	}

 
        
        public function movimiento() {
        $carga_suelta_all = $this->obj_carga_suelta->get_all_carga_suelta();
        $data = array('carga_suelta_all' => $carga_suelta_all);
        $this->load->view('carga_suelta_tabla_view', $data);
     
      }

   
   
}
    



/* End of file admin.php */
/* Location: ./application/controllers/admin.php */