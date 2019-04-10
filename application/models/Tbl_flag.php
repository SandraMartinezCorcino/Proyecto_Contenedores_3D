<?php
class Tbl_flag extends CI_Model{
    private $tabla = "FLAG";
   
  

  	public function __construct() {
        parent::__construct();
    }

 	

 public function insertar_contenedor($data){
$this->db->insert('FLAG', $data);
}  

public function buscar_contenedor($data) {
    try {
      $cod_bl=$data['bl_master_cont'];
      $sql="update contenedor SET ESTADO_FLAG='1' WHERE bl_master_cont='" . $cod_bl. "'  ";
     $query=$this->db->query($sql);
      throw new Exception("error aqui");
    } catch (Exception $exc) {
      echo $exc->getMessage();
    }
  }

 /* public function localizar_contenedor($cod_bl) {
    try {
    
      $sql="  select rfid_contenedor, bl_master_cont,ESTADO_FLAG from contenedor
  where bl_master_cont='". $cod_bl. "' ";

      throw new Exception("error aqui");
    } catch (Exception $exc) {
      echo $exc->getMessage();
    }
  }*/

  PUBLIC function localizar_contenedor($cod_bl){

    try {

       $sql="  select rfid_contenedor, bl_master_cont,ESTADO_FLAG from contenedor
       where bl_master_cont='". $cod_bl. "' ";
     /*  $sql="SELECT COUNT(*) from contenedor WHERE bl_master_cont='". $cod_bl. "' ";
      */


      $query = $this->db->query($sql);
      return $query->result_ARRAY();


      throw new Exception("error aqui");
    } catch (Exception $exc) {
      echo $exc->getMessage();
    }



  }




  	

 /*   public function insert_contenedor($datos){
        try {
            $this->db->insert($this->tabla, $datos); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }*/


}

?>


