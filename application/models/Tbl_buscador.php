<?php
class Tbl_buscador extends CI_Model{
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

       $sql="SELECT  mov_contenedor.bl_master,rfid_contenedor, mov_contenedor.ubicacion , convert (varchar(20),mov_contenedor.fecha,113)as fecha 
        FROM mov_contenedor
        INNER JOIN (SELECT bl_master as CONTENEDOR, MAX(fecha) AS FECHA  FROM mov_contenedor GROUP BY bl_master)as EachItem
        ON EachItem.FECHA=mov_contenedor.fecha
        inner join contenedor on contenedor.bl_master_cont=mov_contenedor.bl_master
        WHERE bl_master='". $cod_bl. "'
        ORDER BY fecha";             

      $query = $this->db->query($sql);

     return $query->result();

      throw new Exception("error aqui");
    } catch (Exception $exc) {
      echo $exc->getMessage();
    }



  }


  PUBLIC function buscador_A1($data){

    try {

      $bl_master=$data['bl_master'];

       $sql="SELECT   MAESTRO_BAHIA.BAHIA,POSICION_X,POSICION_Y, POSICION_Z ,FLAG_ESTADO ,mov_contenedor.bl_master as bl_master,rfid_contenedor, mov_contenedor.ubicacion , convert (varchar(20),mov_contenedor.fecha,113)as fecha 
        ,COLUMNA =
                    CASE  
                    WHEN MAESTRO_BAHIA.COLUMNA='I' THEN 'IZQUIERDA' 
                    WHEN MAESTRO_BAHIA.COLUMNA='D' THEN 'DERECHA'
                    ELSE 'NO REGISTRADO'
                    END 
                                        
        ,FILA =
                    CASE  
                    WHEN MAESTRO_BAHIA.FILA= 1 THEN 'PRIMERA FILA' 
                    WHEN MAESTRO_BAHIA.FILA= 2 THEN 'SEGUNDA FILA'
                    WHEN MAESTRO_BAHIA.FILA= 3 THEN 'TERCERA FILA'
                    WHEN MAESTRO_BAHIA.FILA= 4 THEN 'CUARTA FILA'
                    WHEN MAESTRO_BAHIA.FILA= 5 THEN 'QUINTA FILA'
                    ELSE 'NO REGISTRADO'
                    END 
        ,PISO =
                    CASE  
                    WHEN MAESTRO_BAHIA.PISO= 1 THEN 'PRIMER PISO' 
                    WHEN MAESTRO_BAHIA.PISO= 2 THEN 'SEGUNDO PISO'
                    WHEN MAESTRO_BAHIA.PISO= 3 THEN 'TERCER PISO'
                    WHEN MAESTRO_BAHIA.PISO= 4 THEN 'CUARTO PISO'
                    WHEN MAESTRO_BAHIA.PISO= 5 THEN 'QUINTO PISO'
                    ELSE 'NO REGISTRADO'
                    END 
        FROM mov_contenedor
        INNER JOIN (SELECT bl_master as CONTENEDOR, MAX(fecha) AS FECHA  FROM mov_contenedor GROUP BY bl_master)as EachItem
        ON EachItem.FECHA=mov_contenedor.fecha
        inner join contenedor on contenedor.bl_master_cont=mov_contenedor.bl_master
        inner join MAESTRO_BAHIA  ON MAESTRO_BAHIA.CODIGO=mov_contenedor.ubicacion
        WHERE bl_master='". $bl_master. "'
        ORDER BY fecha";             

      $query = $this->db->query($sql);

     return $query->result_array();

      throw new Exception("error aqui");
    } catch (Exception $exc) {
      echo $exc->getMessage();
    }



  }
}

?>


