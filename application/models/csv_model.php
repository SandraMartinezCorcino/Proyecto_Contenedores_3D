<?php



class Csv_model extends CI_Model {

    

    function __construct() {

        parent::__construct();

        

    }



    /*  function select_sandra() {

        try {



          

        $sql = " SELECT nom_completo ,fecha_recarga

                 from jorgecam_cardburexArequipa.tbl_robot_sandra

                       order by fecha_recarga desc

                       limit 1 

                ";

            $query = $this->db->query($sql);

            return $query->result_array();

        } catch (Exception $e) {

            return false;

        }

    } */





function select_sandra() {

        try {



          

        $sql = " SELECT CONTENEDOR ,FECHA

                 from RUTA

                 order by FECHA desc

                 limit 1 

                ";

            $query = $this->db->query($sql);

            if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return FALSE;

        }

        } catch (Exception $e) {

            return false;

        }

    } 



 /*function get_addressbook() {     

     

        $query = $this->db->get('tbl_robot_sandra');

        



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return FALSE;

        }

    }*/

         function recarga_csv($user) {

        try {



          

        $sql = "SELECT A.id as id_plata, nom_completo,monto,fecha_recarga,tipoTransaccion,estado_recarga,monto ,B.id,B.nom_completos

from RUTA A,

    tblt_empresa B

WHERE substring(B.nom_completos ,1,30) =A.nom_completo

AND B.id=$user

order by id_plata desc

                ";

            $query = $this->db->query($sql);

            return $query->result_array();

        } catch (Exception $e) {

            return false;

        }

    }

function get_addressbook() {     

     

      $sql = " SELECT CONTENEDOR,FECHA
              from RUTA
              order by FECHA desc";

            $query = $this->db->query($sql);

        



        if ($query->num_rows() > 0) {

            return $query->result_array();

        } else {

            return FALSE;

        }

    }



    

    function insert_csv($data) {

       // $this->db->insert('addressbook', $data);

       // $this->db->insert('tbl_robot_sandra', $data);

       //  $this->db->where('ID_ESTADO',  $arrData["ID_ESTADO"]);



      try {

            

        $tipoTransaccion=$data['tipoTransaccion'];

        $nom_completo=$data['nom_completo'];

        $monto=$data['monto'];

        $fecha_recarga=$data['fecha_recarga'];

       

 



  $sql="insert into tblt_robot_yape(nom_completo,monto,fecha_recarga,tipoTransaccion) 

     values ('" . $nom_completo . "','" . $monto . "','" . $fecha_recarga . "' ,'" . $tipoTransaccion . "')  ";



       

  

        $query = $this->db->query($sql);

        if ($this->db->affected_rows() > 0)

                return true;

            else

                return false;

    } catch (Exception $exc) {

         return false;

    }





    }





      function insert_apoyo($data) {

       // $this->db->insert('addressbook', $data);

       // $this->db->insert('tbl_robot_sandra', $data);

       //  $this->db->where('ID_ESTADO',  $arrData["ID_ESTADO"]);



      try {

            

  

        $nom_completo=$data['nom_completo'];



        $fecha_recarga=$data['fecha_recarga'];

       

 



  $sql="insert into tblt_robot_yape(nom_completo,fecha_recarga) 

     values ('" . $nom_completo . "','" . $fecha_recarga . "' )  ";



       

  

        $query = $this->db->query($sql);

        if ($this->db->affected_rows() > 0)

                return true;

            else

                return false;

    } catch (Exception $exc) {

         return false;

    }





    }

}

/*END OF FILE*/

