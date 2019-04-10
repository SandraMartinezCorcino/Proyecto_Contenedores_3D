<?php

class Tbl_cliente extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database('default');
    }

    /*
      public function localizar($cod_vin){
      try {
      // $VIN='LSGSA51M8GY138860000';
      //$data='LSGSA51M8GY138860000';
      //$VIN=$data['VIN'];
      $this->db->select('ID_MOV_VEHICULO_LOCAL','COD_VIN' ,'MAX(FECHA_MOV_LOCAL)' ,' NOM_LOCAL' ,' COD_RFID_VEH');
      // $this->db->select_max('FECHA_MOV_LOCAL');
      $this->db->from('MOV_VEHICULO_LOCAL');
      $this->db->join('LOCALES', 'LOCALES.COD_IP=MOV_VEHICULO_LOCAL.IP_LOCAL');
      $this->db->join('VEHICULO', 'MOV_VEHICULO_LOCAL.COD_RFID_VEH=VEHICULO.COD_RFID');
      $this->db->where('COD_RFID_VEH',$cod_vin);
      $this->db->group_by('ID_MOV_VEHICULO_LOCAL, NOM_LOCAL , COD_RFID_VEH ,FECHA_MOV_LOCAL,COD_VIN');
      $this->db->order_by('FECHA_MOV_LOCAL','desc');
      $query = $this->db->get();
      return $query->result();
      throw new Exception("error aqui");
      } catch (Exception $exc) {
      echo $exc->getMessage();
      }
      }


      } */

    public function localizar($cod_vin) {
        try {
            // $VIN='LSGSA51M8GY138860000';
            //$data='LSGSA51M8GY138860000';
            //$VIN=$data['VIN'];
            $sql = "select top (1) ID_MOV_VEHICULO_LOCAL,COD_VIN , MAX(FECHA_MOV_LOCAL)as FECHA , NOM_LOCAL , COD_RFID_VEH from MOV_VEHICULO_LOCAL inner join  LOCALES  on LOCALES.COD_IP=MOV_VEHICULO_LOCAL.IP_LOCAL INNER JOIN VEHICULO on MOV_VEHICULO_LOCAL.COD_RFID_VEH=VEHICULO.COD_RFID WHERE COD_VIN='" . $cod_vin . "'  group by  ID_MOV_VEHICULO_LOCAL, NOM_LOCAL , COD_RFID_VEH ,FECHA_MOV_LOCAL,COD_VIN order by FECHA_MOV_LOCAL desc";
            $query = $this->db->query($sql);
            return $query->result_ARRAY();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}

//actualizamos los datos de la base de datos
?>

