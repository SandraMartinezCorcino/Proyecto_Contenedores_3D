<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stock_c extends MX_Controller {

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
        $this->load->tmp_admin->setLayout('templates/admin_tmp');

        $nom_bahia=$this->input->post('nom_bahia');
        $posicion_bahia=$this->input->post('posicion_bahia');
        $resultado=$nom_bahia."_".$posicion_bahia; 
        $data['stock_bahia'] = $this->tbl_stock->STOCK_BAHIA($resultado);
        
        $this->tmp_admin->set('stock_bahia', $data['stock_bahia']);
        $this->load->tmp_admin->render('stock_c_view');
    }
    


    public function obtener_bahia(){
          $this->load->model('tbl_stock'); 
        $this->load->tmp_admin->setLayout('templates/admin_tmp');

        $nom_bahia=$this->input->post('nom_bahia');
        $posicion_bahia=$this->input->post('posicion_bahia');
        $resultado=$nom_bahia."_".$posicion_bahia; 
        
        $bahia=$this->tbl_stock->buscar_bahia($resultado);
        $data['stock_bahia'] = $this->tbl_stock->STOCK_BAHIA($resultado);
        //var_dump($data['stock_bahia']);
        //var_dump( $bahia);
            switch (true) {
                case (!empty($bahia) && empty($data['stock_bahia'])):
                    # si el codigo de la bahia existe pero no se encuentra en la tabla movimiento
                   
                    $bahias[]= (object)array('BAHIA' => $resultado,'TOTAL_BAHIA'=>'BAHIA VACIA' );
                    $data['stock_bahia']=$bahias;
                    $this->tmp_admin->set('stock_bahia', $data['stock_bahia']); 
                    $this->tmp_admin->render('stock_c_view','stock_bahia');
                    break;
                
                case (!empty($bahia) && !empty($data['stock_bahia']) ) :
                    # si el codigo de la bahia existe y se encuntra en la tabla movimiento 
                  
                    $this->tmp_admin->set('stock_bahia', $data['stock_bahia']);
                    $this->tmp_admin->render('stock_c_view','stock_bahia');
                    break;
                    
            }





        


            
           /* $nom_bahia=$this->input->post('nom_bahia');
            $posicion_bahia=$this->input->post('posicion_bahia');
            $resultado=$nom_bahia."_".$posicion_bahia; 
            
         
            $result=$this->tbl_stock->STOCK_BAHIA($resultado);
            $tabla="";
            $i=0;
 
            foreach ($result as $row) {
                $i++;
                $tabla.='{"id":"' . $i . '","BAHIA":"' . $row['BAHIA'] . '","TOTAL_BAHIA":"' . $row['TOTAL_BAHIA'] .'"},';
            }
            $tabla = substr($tabla, 0, strlen($tabla) - 1);
            echo '{"data":[' . $tabla . ']}';


            try {
                if ($result) {
                $rpta = "Se guardó correctamente";
            } else {
                $rpta = "Error al guardar la información";
            }
            } catch (Exception $e) {
                $rpta = 'Error de Transacción';
            }*/

            

    }
    

/*$data['stock_bahia'] = $this->tbl_stock->STOCK_BAHIA($resultado);
            $this->tmp_admin->set('stock_bahia', $data['stock_bahia']);
            var_dump($data);
            $this->tmp_admin->render('stock_c_view','stock_bahia');

            //echo json_encode($data) ;
            $this->tmp_admin->render('stock_c_view');*/


}