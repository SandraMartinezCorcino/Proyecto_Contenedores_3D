<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movimiento_Contenedores_Area_Servicio extends MX_Controller {
    public function __construct(){
        parent::__construct();
        
        $this->load->database();
        $this->load->model('tbl_usuario','obj_usuario');
        $this->load->model('tbl_mov_area','obj_mov_area');
      //$this->load->model('tbl_almacen');

       
        if($this->session->userdata('logged') != 'true'){
           redirect('login');
        }   

    }
	public function index(){
        $mov_area=$this->obj_mov_area->get_mov_area();
    	//$mov=$this->obj_mov_area->get_mov_area();
        $this->tmp_admin->set('mov_area',$mov_area);
        //$this->load->tmp_admin->set('mov',$mov);
        $this->load->tmp_admin->render('movimiento_contenedor_area_servicio_view.php','movimiento_contenedor_area_servicio');
	}
        
        public function movimiento_area() {
        $mov_area = $this->obj_mov_area->get_mov_area_10();
        $data = array('mov_area' => $mov_area);
        $this->load->view('movimiento_contenedor_area_servicio_tabla_view', $data);
     
    }
        
        
        
        
        
    public function exportarExcel(){

       // $data=$this->tbl_almacen->get_mov_area_servicio();
        $data=$this->obj_mov_area->get_mov_area();
        //$this->tmp_admin->set('mov_contenedor',$data);
        $table = "<table class='table table-bordered table-hover' id='table_ids' style='text-align:center'>
            <caption>MOVIMIENTO CONTENEDORES AREA DE SERVICIO</caption>
                       <thead> 
                           <tr>
                               <th>Item</th>
							   <th>Nave</th>
							   <th>Viaje / Rumbo</th>
							   <th>Operacion</th>
							   <th>Servicio</th>
                               <th>Fecha de Ingreso</th>
                               <th>Hora de Ingreso</th>
                               <th>Fecha de Salida</th>
                               <th>Hora de Salida</th>
                               <th>Contenedor</th>
							   <th>Tipo</th>
							   <th>Tamaño</th>
							   <th>Ubicacion</th>
							   <th>Tipo de Carga</th>
							   <th>Condicion</th>
							   <th>Observaciones</th>
                               <th>Tiempo</th>
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
					<td style='text-align:center'>".'Servicio'."</td>
               <td style='text-align:center'>".substr($value->fecha,0,10)."</td>
               <td style='text-align:center'>".substr($value->fecha,11)."</td>
               <td style='text-align:center'>".substr($value->fecha,0,10)."</td>
               <td style='text-align:center'>".substr($value->fecha,11)."</td>
               <td style='text-align:center'>".$value->nombre_contenedor."</td>
			   <td style='text-align:center'>".$value->nombre_tipo_contenedor."</td>
               <td style='text-align:center'>".'Tamaño'."</td>
			   <td style='text-align:center'>".$value->ubicacion."</td>
			   <td style='text-align:center'>".'Tipo de carga'."</td>
			   <td style='text-align:center'>".$value->CONCAR_C_CODIGO."</td>
				<td style='text-align:center'>".'Observaciones'."</td>
               <td style='text-align:center'>".$value->tiempo."</td>
               
           </tr>";
        }
        
        $table.= "</tbody>
       </table>";

       header("Content-type: application/vnd.ms-excel; name='excel'");
       header("Content-Disposition: attachment; filename=Excel_movimiento_contenedores_area_servicio.xls");
       header("Pragma: no-cache");
       header("Expires: 0");

       echo $table;
}
}