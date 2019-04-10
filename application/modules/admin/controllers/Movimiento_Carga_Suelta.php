<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Movimiento_Carga_Suelta extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('Excel');
        $this->load->database();
        $this->load->model('tbl_usuario', 'obj_usuario');
        $this->load->model('tbl_mov_carga_suelta');


        if ($this->session->userdata('logged') != 'true') {
            redirect('login');
        }
    }

    public function index() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_sueltas', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta_view', 'movimiento_carga_suelta');
       
    }
    
       public function movimiento_plano_anaquel() {
       $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $data = array('carga' => $carga);
        $this->load->view('anaqueles_todo_dinamico_view', $data);
     
    }
    
     public function movimiento() {
       $mov_carga_suelta = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta_10();
        $data = array('mov_carga_suelta' => $mov_carga_suelta);
        $this->load->view('movimiento_carga_suelta_tabla_view', $data);
     
    }

public function MOVIMIENTO_ALMACEN(){
      
    
    $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_sueltas', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_almacen_cs_view', 'movimiento_carga_suelta');
    
    
    }

    public function MOVIMIENTO_ALMACEN_CARGA_SUELTA(){
      $movimiento_almacen = $this->tbl_mov_carga_suelta->get_mov_almacen_cs();
      $data = array('movimiento_almacen' => $movimiento_almacen);
      $this->load->view('movimiento_almacen_cs_tabla_view', $data);

    }
    
    
    
 public function anaquel_10() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta10_view', 'movimiento_carga_suelta');
       
    }
    
  public function anaquel_01() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta01_view', 'movimiento_carga_suelta');
       
    }  
    
    public function anaquel_02() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta02_view', 'movimiento_carga_suelta');
       
    }
    
    public function anaquel_03() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta03_view', 'movimiento_carga_suelta');
       
    } 
    
    public function anaquel_04() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta04_view', 'movimiento_carga_suelta');
       
    } 
    
    public function anaquel_05() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta05_view', 'movimiento_carga_suelta');
       
    } 
    
    public function anaquel_06() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta06_view', 'movimiento_carga_suelta');
       
    } 
    
    public function anaquel_07() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta07_view', 'movimiento_carga_suelta');
       
    } 
    
        public function anaquel_08() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta08_view', 'movimiento_carga_suelta');
       
    } 
    
        public function anaquel_09() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta09_view', 'movimiento_carga_suelta');
       
    } 
    
        public function anaquel_11() {
        $data['mov_carga'] = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->tmp_admin->set('mov_carga_suelta', $data['mov_carga']);

        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $this->tmp_admin->set('carga', $carga);
        $this->load->tmp_admin->render('movimiento_carga_suelta11_view', 'movimiento_carga_suelta');
       
    } 
    
   
    
    
    
    public function actualizar_anaquel() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();
        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico.php', $data);
    }
    
   /* public function actualizar_anaquel10() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico10.php', $data);
    }*/
    
     public function actualizar_anaquel01() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico1.php', $data);
    }
    
      public function actualizar_anaquel02() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico2.php', $data);
    }
    
     public function actualizar_anaquel03() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico3.php', $data);
    }
    
      public function actualizar_anaquel04() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico4.php', $data);
    }
    
      public function actualizar_anaquel05() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico5.php', $data);
    }
    
      public function actualizar_anaquel06() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico6.php', $data);
    }
    
      public function actualizar_anaquel07() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico7.php', $data);
    }
    
      public function actualizar_anaquel08() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico8.php', $data);
    }
    
      public function actualizar_anaquel09() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico9.php', $data);
    }
    
      public function actualizar_anaquel10() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico10.php', $data);
    }
    
      public function actualizar_anaquel11() {
        $carga = $this->tbl_mov_carga_suelta->ANAQUEL();

        $data = array('carga' =>  $carga);
        $this->load->view('anaquel_dinamico11.php', $data);
    }
     
    public function exportarExcel() {
        $carga_suelta = $this->tbl_mov_carga_suelta->get_all_mov_carga_suelta();

        $table = "<table class='table table-bordered table-hover' id='table_ids'  style='text-align:center'>
          <caption>MOVIMIENTO CARGA SUELTA</caption>
                       <thead> 
                           <tr>
                               <th>Item</th>
                               <th>Ubicacion</th>
                               <th>Fecha Ingreso</th>
                           </tr>
                       </thead>
                       <tbody>";
   
        $cant = 0;

        foreach ($carga_suelta as $key => $value) {
            $table.="<tr>
               <td>&nbsp;" . $key . "</td>
               <td>" . $value->ubicacion . "</td>
               <td>" . $value->fecha_ingreso_almacen . "</td>
               
           </tr>";
        }

        $table.= "</tbody>
       </table>";

        header("Content-type: application/vnd.ms-excel; name='excel'");
        header("Content-Disposition: attachment; filename=Excel_movimiento_carga_suelta.xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        echo $table;
    }

}
