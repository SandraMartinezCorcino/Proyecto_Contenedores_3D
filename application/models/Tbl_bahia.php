<?php

class Tbl_bahia extends CI_Model {

    private $tabla = "BAHIA";

    public function __construct() {
        parent::__construct();
    }


   function VINCULACION_BAHIA() {
        try {
            
            $sql = "SELECT  COD_BAHIA,TOTAL_PISOS,convert (varchar(20),FECHA_VINCULACION_BAHIA,113)as FECHA_VINCULACION_BAHIA,
                    COD_RFID= 
                        CASE  
                             WHEN COD_RFID<>'NULL' AND COD_RFID<>'' THEN COD_RFID
                             ELSE 'NO REGISTRADO'
                             END
                    FROM BAHIA
                    WHERE  COD_BAHIA<>'NULL'   
                    ORDER BY COD_BAHIA ASC";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

}

?>