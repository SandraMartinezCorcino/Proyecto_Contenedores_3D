<?php
class Tbl_carga_suelta extends CI_Model{
    private $tabla = "CARGA_SUELTA";
    private $id_tabla = "id_carga_suelta";

  	public function __construct() {
        parent::__construct();
    }

    public function get_carga_suelta($id){
      /*  try {   
            $this->db->where($this->id_tabla,$id);
            $query = $this->db->get($this->tabla);
            return $query->row();
        } catch (Exception $exc) {
            return FALSE;
        }*/
    }

  	public function get_all_carga_suelta(){
		try{
			/*$query = $this->db->get($this->tabla);
			return $query->result();*/
               $this->db->select('ID_CARGA_SUELTA , COD_RFID,BL_HIJO,FECHA_VINCULACION');
            
            $this->db->from('CARGA_SUELTA');

            $this->db->limit(10);
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");



	  	}
	  	catch(Exception $exc) {
            echo $exc->getMessage();
      	}
    }


    public function get_all_carga_suelta_10(){
        try{
            /*$query = $this->db->get($this->tabla);
            return $query->result();*/
               $this->db->select('ID_CARGA_SUELTA , COD_RFID,BL_HIJO');
            
            $this->db->from('CARGA_SUELTA');

            
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");



        }
        catch(Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function editar_carga_suelta($datos,$id){
        try {
            $this->db->where($this->id_tabla,$id);
            $this->db->update($this->tabla, $datos); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function insert_carga_suelta($datos){
        try {
            $this->db->insert($this->tabla, $datos); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function eliminar($id){
        try {
            $this->db->delete($this->tabla, array( 'id_carga_suelta' => $id)); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }
}

?>