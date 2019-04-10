<?php
class Tbl_contenedor extends CI_Model{
    private $tabla = "contenedor";
   
    private $id_tabla = "id_contenedor";

  	public function __construct() {
        parent::__construct();
    }

 	public function get_contenedor(){
	       try {
            
            $sql = "SELECT bl_master_cont,
                        rfid_contenedor =
                                        CASE  
                                        WHEN rfid_contenedor<>'NULL' THEN rfid_contenedor
                                        ELSE 'NO REGISTRADO'
                                        END  
 

                    ,convert (varchar(20),FECHA_VINCULACION,113)as FECHA_VINCULACION ,
  
                        rfid_contenedor_activo=
                                        CASE  
                                        WHEN rfid_contenedor_activo<>'NULL' THEN rfid_contenedor_activo
                                        ELSE 'NO REGISTRADO'
                                        END
                    ,convert (varchar(20),FECHA_VINCULACION_ACTIVO,113)as FECHA_VINCULACION_ACTIVO 
                    FROM contenedor
                    ORDER BY FECHA_VINCULACION DESC";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    public function vincular_contenedor(){
            try{
            $query = $this->db->get($this->tabla); 
            return $query->result();
        }
        catch(Exception $exc) {
            echo $exc->getMessage();
        }



    }

 /*   public function insertar_contenedor($data){
$this->db->insert('FLAG', $data);
}  */
    
  	public function get_all_contenedor($id=0){
		try{
			$this->db->select('
                contenedor.id_contenedor,
              contenedor.nombre_contenedor,
                usuario.usuario, 
                contenedor.rfid_contenedor,
                contenedor.fecha,
				tipo_contenedor.nombre_tipo_contenedor,
				tipo_contenedor.id_tipo_contenedor,
				contenedor.bl_master,
				');
				
            if($id) $this->db->where('contenedor.id_contenedor',$id);

            $this->db->from('contenedor');
           $this->db->join('usuario','contenedor.id_usuario=usuario.id');
            $this->db->join('tipo_contenedor','tipo_contenedor.id_tipo_contenedor=contenedor.tipo_contenedor');
            $query = $this ->db->get();
            return $query->result();
	  	}
	  	catch(Exception $exc) {
            echo $exc->getMessage();
      	}
    }

	public function editar_contenedor($datos,$id){
        try {
            $this->db->where($this->id_tabla,$id);
            $this->db->update($this->tabla, $datos); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function insert_contenedor($datos){
        try {
            $this->db->insert($this->tabla, $datos); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function eliminar($id){
        try {
            $this->db->delete($this->tabla, array( 'id_contenedor' => $id)); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function get_usuario_contenedor(){
        try{
            $this->db->select('contenedor.id_contenedor,contenedor.nombre_contenedor,contenedor.tipo_contenedor,contenedor.rfid_contenedor,usuario.usuario');
            $this->db->from('contenedor');
            $this->db->join('usuario','contenedor.id_usuario=usuario.id' );
            $consulta = $this ->db->get();
            return $consulta->result();
          }
          catch(Exception $exc) {
                echo $exc->getMessage(); 
            }
    }
}

?>
