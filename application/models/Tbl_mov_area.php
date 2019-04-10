<?php
class Tbl_mov_area extends CI_Model{
 
public function __construct() {
        parent::__construct();        
    }

	public function get_mov_area(){
		try{

	 $this->db->select('bl_master_cont,CONTEN_C_CODIGO,OBSERVACIONES,TIPO_CARGA,TIPO, SERVICIO,TAMAÑO,fecha_salida,mov_contenedor.tiempo,OPETV_DOCUMENTO_ORIGEN_DETALLE.CONCAR_C_CODIGO ,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVE_C_CODIGO ,OPETV_DOCUMENTO_ORIGEN_DETALLE.rumbo_c_codigo,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVIRU_C_VIAJE,OPETV_DOCUMENTO_ORIGEN_DETALLE.OPERAC_C_CODIGO,mov_contenedor.ubicacion,mov_contenedor.fecha,mov_contenedor.ubicacion,mov_contenedor.stacker');
	
	   $this ->db->from('contenedor');
	    
	   $this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont' ,'left');
	   $this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE', 'contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.DOCORI_C_NUMERO' ,'left');
	     $this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont','left');
           $this->db->order_by('fecha_salida', 'asc');
             $consulta = $this->db->get();
	   return $consulta->result();
	   throw new Exception("error aqui");
	  }
	  catch(Exception $exc) {
            echo $exc->getMessage(); 
        }
    }


    public function get_mov_area_10(){
    	try{

    		$this->db->select('bl_master_cont,CONTEN_C_CODIGO,OBSERVACIONES,TIPO_CARGA,TIPO, SERVICIO,TAMAÑO,fecha_salida,mov_contenedor.tiempo,OPETV_DOCUMENTO_ORIGEN_DETALLE.CONCAR_C_CODIGO ,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVE_C_CODIGO ,OPETV_DOCUMENTO_ORIGEN_DETALLE.rumbo_c_codigo,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVIRU_C_VIAJE,OPETV_DOCUMENTO_ORIGEN_DETALLE.OPERAC_C_CODIGO,mov_contenedor.ubicacion,mov_contenedor.fecha,mov_contenedor.ubicacion,mov_contenedor.stacker');

    		$this ->db->from('contenedor');

    		$this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont' ,'left');
    		$this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE', 'contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.DOCORI_C_NUMERO' ,'left');
    		$this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont','left');
    		$this->db->order_by('fecha_salida', 'asc');
    		$this->db->limit(10);
    		$consulta = $this->db->get();
    		return $consulta->result();
    		throw new Exception("error aqui");
    	}
    	catch(Exception $exc) {
    		echo $exc->getMessage(); 
    	}
    }

	}
?>