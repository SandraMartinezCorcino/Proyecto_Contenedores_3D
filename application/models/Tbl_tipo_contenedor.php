<?php
class Tbl_tipo_contenedor extends CI_Model{
    private $tabla = "tipo_contenedor";
    private $id_tabla = "id_tipo_contenedor";

  	public function __construct() {
        parent::__construct();
    }

    public function get_tipo_contenedor($id){
        try {   
            $this->db->where($this->id_tabla,$id);
            $query = $this->db->get($this->tabla);
            return $query->row();
        } catch (Exception $exc) {
            return FALSE;
        }
    }

  	public function get_all_tipo_contenedor(){
		try{
			$query = $this->db->get($this->tabla);
            return $query->result();
	  	}
	  	catch(Exception $exc) {
            echo $exc->getMessage();
      	}
    }
}
?>
