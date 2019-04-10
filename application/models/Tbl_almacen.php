<?php
class Tbl_almacen extends CI_Model{
	private $tabla = "almacen";
	private $id_tabla = "id_almacen";
 
  public function __construct() {
        parent::__construct();        
    }
 	
 	// Para obtener un almacen con su id
  	public function get_almacen($id){
	  	/*try{
	  		$this->db->where($this->id_tabla,$id);
			    $this->db->select('tipo_contenedor.nombre_tipo_contenedor,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVE_C_CODIGO,OPETV_DOCUMENTO_ORIGEN_DETALLE.rumbo_c_codigo ,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVIRU_C_VIAJE,OPETV_DOCUMENTO_ORIGEN_DETALLE.OPERAC_C_CODIGO,contenedor.NOMBRE_CONTENEDOR,mov_contenedor.ubicacion,mov_contenedor.fecha_ingreso,mov_contenedor.ubicacion,mov_contenedor.stacker ');
				$this ->db->from('contenedor');
				$this->db->join('tipo_contenedor', 'tipo_contenedor.id_tipo_contenedor=contenedor.tipo_contenedor' );
			
			
            $query = $this->db->get($this->tabla);
            return $query->row();

     //   		$consulta= $this->db->get($this->almacen);
	   	// 	return $consulta->result();
	  		// return $consulta->num_rows();
	   	// throw new Exception("error aqui");
	   
	  	}
	  	catch(Exception $exc) {
            echo $exc->getMessage(); 
        }*/
    }

    // Para obtener todos los almacenes
    public function get_all_almacen(){
		/*try{
			$query = $this->db->get($this->tabla);
			return $query->result();
	  	}
	  	catch(Exception $exc) {
            echo $exc->getMessage();
      	}*/
    }

    public function editar_almacen($datos,$id){
        try {
            $this->db->where($this->id_tabla, $id);
            $this->db->update($this->tabla, $datos); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }


	
	public function get_union_almacen_mov_carga (){
		/*try{
       $this->db->select('almacen.stock ,almacen.ubicacion , mov_carga_suelta.fecha_ingreso_almacen');
	    $this->db->from('almacen');
	 $this->db->join('mov_carga_suelta', 'almacen.bl_master=mov_carga_suelta.bl_master' );
	   $consulta = $this ->db->get();
	   return $consulta->result();
	   throw new Exception("error aqui");
	   
	  }
	  catch(Exception $exc) {
            echo $exc->getMessage(); 
        }*/
    }
	
	public function get_movimiento_contenedor(){
	try{
	   $consulta = $this ->db->get('mov_contenedor');
	   return $consulta->result();
	   throw new Exception("error aqui");
	   
	  }
	  catch(Exception $exc) {
            echo $exc->getMessage(); 
        }
    }
	public function get_datos_carga_suelta(){
		try{
		   $query = $this ->db->get('mov_carga_suelta');
		   return $this ->db->num_rows('mov_carga_suelta');
		   throw new Exception("error aqui");
		   
		  }
		  catch(Exception $exc) {
	            echo $exc->getMessage(); 
	        }
    }	
	
    public function get_mov_area_servicio(){
		try{
			$this->db->select(' mov_contenedor.fecha,mov_contenedor.fecha_salida,contenedor.nombre_contenedor,mov_contenedor.ubicacion,mov_contenedor.tiempo');
			$this->db->from('contenedor');
			$this->db->join('mov_contenedor', 'contenedor.id_contenedor=mov_contenedor.id_contenedor' );
			$consulta = $this ->db->get();
			return $consulta->result();
			   throw new Exception("error aqui");
		  }
		  catch(Exception $exc) {
	            echo $exc->getMessage(); 
	        }
	    }
	}
?>
