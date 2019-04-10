<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Movimiento_Contenedor extends MX_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $this->load->model('tbl_usuario', 'obj_usuario');
        $this->load->model('tbl_mov_contenedor');


        if ($this->session->userdata('logged') != 'true') {
            redirect('login');
        }
    }

    public function index() {
        $this->load->model('tbl_mov_contenedor');
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
  
        $this->load->tmp_admin->render('movimiento_contenedor_view');
    }





     public function Bahia_3d_A1() {
        $this->load->model('tbl_mov_contenedor');
        $this->load->tmp_admin->setLayout('templates/admin_tmp');
        $data=$this->tbl_mov_contenedor->maestro_bahia_A_general();
  
        $this->load->tmp_admin->render('BAHIA_A_view');
        echo json_encode($data);
    }
    //bl_master_cont,COD_BAHIA,vincular.fecha
     public function tabla_movimiento_contenedor() {
        
        $antena =$this->tbl_mov_contenedor->movimiento_contenedor_antenas_stacker();
        echo json_encode($antena);        
    }

    /***************************** BAHIAS 3D *******************************************/

     /*$movimiento_contenedor_antena = $this->tbl_mov_contenedor->movimiento_contenedor_antena();
      $data = array('movimiento_contenedor_antena' => $movimiento_contenedor_antena);
      $this->load->view('movimiento_contenedor_view', $data); 
      var_dump($data);*/

    public function maestro_bahia_A()

    { 

       



        $this->load->model('tbl_mov_contenedor');

        $data = $this->tbl_mov_contenedor->maestro_bahia_A();

        echo json_encode($data);

           

    }

    /****************************************** BAHIA MAPA **************************************/
      public function bahia_A1() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_A1();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

    public function bahia_A2() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_A2();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

    public function bahia_B3() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_B3();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

    public function bahia_C2() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C2();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }


    public function bahia_C3() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C3();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }
    
      public function bahia_C4() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C4();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

       public function bahia_C5() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C5();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

       public function bahia_C6() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C6();
        foreach ($lista as $row) {
            $i++;
             $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

       public function bahia_C7() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C7();
        foreach ($lista as $row) {
            $i++;
           $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

       public function bahia_C8() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C8();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

        public function bahia_C9() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C9();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

        public function bahia_C10() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_C10();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D1() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D1();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D2() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D2();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D3() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D3();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D4() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D4();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D5() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D5();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D6() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D6();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D7() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D7();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D8() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D8();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D9() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D9();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D10() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D10();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D11() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D11();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D12() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D12();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D13() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D13();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D14() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D14();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

     public function bahia_D15() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_D15();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }


      public function bahia_E1() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E1();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E2() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E2();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E3() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E3();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E4() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E4();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E5() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E5();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E6() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E6();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E7() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E7();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E8() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E8();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E9() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E9();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E10() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E10();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E11() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E11();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E12() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E12();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E13() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E13();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

      public function bahia_E14() {
        $this->load->model('tbl_mov_contenedor');
        $tabla = "";
        $i = 0;
        $lista = $this->tbl_mov_contenedor->movimiento_bahia_E14();
        foreach ($lista as $row) {
            $i++;
            $tabla.= '{"id":"' . $i . '","bl_master":"' . $row['bl_master'] . '","ubicacion":"' . $row['ubicacion'] . '","fecha":"' . $row['fecha'].'"},';
        }
        $tabla = substr($tabla, 0, strlen($tabla) - 1);
        //header("Content-type: application/json");
        // echo json_encode($result);
        echo '{"data":[' . $tabla . ']}';
    }

    /************************* FIN BAHIA MAPA *************************************************/








    
     public function movimiento_antena(){
      $movimiento_contenedor_antena = $this->tbl_mov_contenedor->movimiento_contenedor_antena();
      $data = array('movimiento_contenedor_antena' => $movimiento_contenedor_antena);
      $this->load->view('movimiento_contenedor_view', $data); 
      var_dump($data);

     }


     public function movimiento() {
       $movimiento_contenedor = $this->tbl_mov_contenedor->get_mov_contenedor_10();
        $data = array('movimiento_contenedor' => $movimiento_contenedor);
        $this->load->view('movimiento_contenedor_tabla_view', $data);
        //var_dump($data);
     
    }

       public function reubicacion() {
       $movimiento_contenedor = $this->tbl_mov_contenedor->get_reubicacion_contenedor();
        $data = array('movimiento_contenedor' => $movimiento_contenedor);
        $this->load->view('reubicacion_contenedor_tabla_view', $data);
     
    }
    
  /*   public function movimiento_historial() {
       $movimiento_contenedores = $this->tbl_mov_contenedor->get_mov_contenedor_10();
        $data = array('movimiento_contenedores' => $movimiento_contenedores);
        $this->load->view('movimiento_contenedor_tabla_view', $data);
     
    }*/
    
     public function actualizar_contenedor() {
         $bahia = $this->tbl_mov_contenedor->bahia_contenedores();
        $data = array('bahia' =>  $bahia);
        $this->load->view('contenedor_dinamico_view.php', $data);
    }
    



    
    
    

  

}
