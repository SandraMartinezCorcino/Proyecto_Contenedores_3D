<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movimiento_Ctn_Cs_Historial_Inventario extends MX_Controller {
    public function __construct(){
        parent::__construct();
         
        $this->load->model('tbl_usuario','obj_usuario');
        $this->load->model('tbl_mov_ctn','obj_mov_ctn');
        $this->load->library('excel');
        if($this->session->userdata('logged') != 'true'){
           redirect('login');
        }

    }
	public function index(){
       // $data['movimiento_ctn']=$this->tbl_mov_ctn->get_mov_ctn();
        //$this->tmp_admin->set('movimiento_ctn',$data['movimiento_ctn']);
        //$this->load->tmp_admin->render('movimiento_ctn_cs_historial_inventario_view.php','movimiento_ctn_cs_historial_inventario');
	
	$mov_ctn=$this->obj_mov_ctn->get_mov_ctn();
    	//$mov=$this->obj_mov_area->get_mov_area();
        $this->tmp_admin->set('mov_ctn',$mov_ctn);
        //$this->load->tmp_admin->set('mov',$mov);
        $this->load->tmp_admin->render('movimiento_ctn_cs_historial_inventario_view.php','movimiento_ctn_cs_historial_inventario');
	
	
	}
     public function movimiento_ctn() {
        $mov_ctns = $this->obj_mov_ctn->get_mov_ctn_10();
        $data = array('mov_ctns' => $mov_ctns);
        $this->load->view('movimiento_ctn_cs_historial_inventario_tabla_view', $data);
     
    }

    public function exportarExcel(){

        $data=$this->obj_mov_ctn->get_mov_ctn();

        $table = "<table class='table table-bordered table-hover' id='table_ids' style='text-align:center'>
                       <thead> 
                       <caption>MOVIMIENTO CONTENEDORES CON CARGA SUELTA - HISTORIAL DE INVENTARIO</caption>
                           <tr>
                               <th>ITEM</th>
                               <th>NAVE</th>
							    <th>VIAJE / RUMBO</th>
                               <th>OPERACION</th>
                               <th>CONTENEDOR</th>
                               <th>TIPO</th>
                               <th>TAMAÑO</th>
                               <th>UBICACION</th>
                               <th>FECHA</th>
                               <th>HORA</th>
                               <th>TIPO DE CARGA</th>
                               <th>CONDICION</th>
                               <th>NUEVAS UBICACIONES</th>
                               <th>STACKER</th>
                               <th>USUARIO</th>
                               <th>OBSERVACIONES</th>
                           </tr>
                       </thead>
                       <tbody>";

       $cant = 0;

        foreach ($data as $key => $value){
           $table.="<tr>
               <td>&nbsp;".($key+1)."</td>
               <td style='text-align:center'>".$value->NAVE_C_CODIGO."</td>
               <td style='text-align:center'>".$value->NAVIRU_C_VIAJE.'/'.$value->rumbo_c_codigo."</td>
               <td style='text-align:center'>".$value->OPERAC_C_CODIGO."</td>
               <td style='text-align:center'>".$value->nombre_contenedor."</td>
               <td style='text-align:center'>".$value->nombre_tipo_contenedor."</td>
               <td style='text-align:center'>".'12000'."</td>
               <td style='text-align:center'>".$value->ubicacion."</td>
               <td style='text-align:center'>".substr($value->fecha,0,10)."</td>
               <td style='text-align:center'>".substr($value->fecha,11)."</td>
               <td style='text-align:center'>".'tipo_carga'."</td>
               <td style='text-align:center'>".'Inmovilizado'."</td>
               <td style='text-align:center'>".$value->ubicacion."</td>
               <td style='text-align:center'>".$value->stacker."</td>
               <td style='text-align:center'>".$value->usuario."</td>
           </tr>";
        }
        $table.= "</tbody>
       </table>";

       header("Content-type: application/vnd.ms-excel; name='excel'");
       header("Content-Disposition: attachment; filename=Excel_movimiento_ctn_cs_historial_inventario.xls");
       header("Pragma: no-cache");
       header("Expires: 0");

       echo $table;
    }
}
  