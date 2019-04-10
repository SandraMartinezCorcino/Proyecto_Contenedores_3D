<?php

class Tbl_mov_contenedor extends CI_Model {

    private $tabla = "mov_contenedor";

    public function __construct() {
        parent::__construct();
    }
   
   /**********STOCK**************/
    function stock_total_espacios_vacios_ocupados() {
        try {
            
           
            $sql = " SELECT 
                    COUNT(CASE WHEN FLAG_ESTADO = 0  THEN FLAG_ESTADO  END) ESPACIOS_VACIOS,
                    COUNT(CASE WHEN FLAG_ESTADO = 1  THEN FLAG_ESTADO  END) ESPACIOS_OCUPADOS,
                    COUNT(CASE WHEN FLAG_ESTADO = 1 or FLAG_ESTADO = 0   THEN FLAG_ESTADO  END) ESPACIOS_TOTAL

                    FROM MAESTRO_BAHIA ";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }
    
        function stocK_espacios_vacios() {
        try {
            
           
            $sql = " SELECT BAHIA,CODIGO, FLAG_ESTADO ,convert (varchar(20),FECHA_FLAG,113) AS FECHA 
                     from MAESTRO_BAHIA 
                     WHERE FLAG_ESTADO=0
                     ORDER BY BAHIA ";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
            } catch (Exception $e) {
             return false;
            }
        }

        function stocK_espacios_ocupados() {
        try {
            
           
           /* $sql = " SELECT MAESTRO_BAHIA.BAHIA as BAHIA
                       ,mov_contenedor.bl_master as  BL_MASTER
                       ,mov_contenedor.ubicacion as UBICACION
                       ,convert (varchar(20),mov_contenedor.fecha,113) as FECHA
                        from mov_contenedor
                        inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master)
                        as EachItem
                        on EachItem.fecha=mov_contenedor.fecha
                        inner join contenedor on contenedor.bl_master_cont=mov_contenedor.bl_master
                        inner join MAESTRO_BAHIA on MAESTRO_BAHIA.CODIGO=mov_contenedor.ubicacion
                        WHERE MAESTRO_BAHIA.FLAG_ESTADO=1
                        ORDER BY fecha asc"; */


            $sql = " SELECT BAHIA,CODIGO, FLAG_ESTADO ,convert (varchar(20)  ,FECHA_FLAG,113) AS FECHA 
                     from MAESTRO_BAHIA 
                     WHERE FLAG_ESTADO=1
                     ORDER BY BAHIA "; 
                    
            $query = $this->db->query($sql);
            return $query->result_array();
            } catch (Exception $e) {
            return false;
            }
        }


    /**********FIN STOCK**************/
    function maestro_bahia_A($datas) {
        try {
            
            $bahia=$datas[0]['BAHIA'];
            $sql = "SELECT CODIGO , POSICION_X,POSICION_Y, POSICION_Z ,FLAG_ESTADO 
                    FROM MAESTRO_BAHIA
                    WHERE BAHIA='". $bahia. "' ";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    function maestro_bahia_A_general($data) {
        try {
            
          // $bahia=$data;
            $sql = "SELECT CODIGO , POSICION_X,POSICION_Y, POSICION_Z ,FLAG_ESTADO 
                    FROM MAESTRO_BAHIA
                    WHERE BAHIA='". $data. "' ";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    function informacion_bahia_A_general($data) {
        try {
            
          // $bahia=$data;
            $sql = "SELECT 
                    COUNT(CASE WHEN FLAG_ESTADO = 0  THEN FLAG_ESTADO  END) ESPACIOS_VACIOS,
                    COUNT(CASE WHEN FLAG_ESTADO = 1  THEN FLAG_ESTADO  END) ESPACIOS_OCUPADOS,
                    COUNT(CASE WHEN FLAG_ESTADO = 1 or FLAG_ESTADO = 0   THEN FLAG_ESTADO  END) ESPACIOS_TOTAL

                    FROM MAESTRO_BAHIA
                    WHERE BAHIA='". $data. "' ";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    function maestro_bahia_A2_general($data) {
        try {
            
          // $bahia=$data;
            $sql = "SELECT CODIGO , POSICION_X,POSICION_Y, POSICION_Z ,FLAG_ESTADO 
                    FROM MAESTRO_BAHIA
                    WHERE BAHIA='". $data. "' ";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }


    function maestro_plano() {
        try {
            
          // $bahia=$data;

          $sql = " SELECT BAHIA,CODIGO , POSICION_PLANO_X,POSICION_PLANO_Y, POSICION_PLANO_Z ,FLAG_ESTADO 
                    FROM MAESTRO_BAHIA
                    WHERE  
                    (POSICION_PLANO_X IS NOT NULL OR POSICION_PLANO_Y IS NOT NULL OR POSICION_PLANO_Z IS NOT NULL)
                    ";
           /*$sql = "     SELECT BAHIA,CODIGO , POSICION_PLANO_X,POSICION_PLANO_Y, POSICION_PLANO_Z ,FLAG_ESTADO 
                    FROM MAESTRO_BAHIA
                    WHERE  (BAHIA='D15'  ) and
                    (POSICION_PLANO_X IS NOT NULL OR POSICION_PLANO_Y IS NOT NULL OR POSICION_PLANO_Z IS NOT NULL)
                    ";*/

               /* $sql = "SELECT CODIGO , POSICION_X,POSICION_Y, POSICION_Z ,FLAG_ESTADO 
                FROM MAESTRO_BAHIA
                WHERE  
                POSICION_X IS NOT NULL 
                OR POSICION_Y IS NOT NULL 
                OR POSICION_Z IS NOT NULL";*/
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function maestro_plano_ocupado() {
        try {
            
          // $bahia=$data;
           $sql = "SELECT BAHIA,CODIGO , POSICION_PLANO_X,POSICION_PLANO_Y, POSICION_PLANO_Z ,FLAG_ESTADO 
                    FROM MAESTRO_BAHIA
                    WHERE  FLAG_ESTADO=1 AND
                    (POSICION_PLANO_X IS NOT NULL OR POSICION_PLANO_Y IS NOT NULL OR POSICION_PLANO_Z IS NOT NULL)
                    order by BAHIA ASC";

               /* $sql = "SELECT CODIGO , POSICION_X,POSICION_Y, POSICION_Z ,FLAG_ESTADO 
                FROM MAESTRO_BAHIA
                WHERE  
                POSICION_X IS NOT NULL 
                OR POSICION_Y IS NOT NULL 
                OR POSICION_Z IS NOT NULL";*/
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }


       function movimiento_contenedor_antenas_stacker() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master)
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                inner join contenedor on contenedor.bl_master_cont=mov_contenedor.bl_master
                ORDER BY fecha asc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

  function movimiento_bahia_A1() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%A1%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

      function movimiento_bahia_A2() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%A2%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

      function movimiento_bahia_B3() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%B3%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

      function movimiento_bahia_C2() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C2%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    function movimiento_bahia_C3() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C3%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

        function movimiento_bahia_C4() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C4%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }


    function movimiento_bahia_C5() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C5%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

        function movimiento_bahia_C6() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C6%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }    


     function movimiento_bahia_C7() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C7%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

      function movimiento_bahia_C8() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C8%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_C9() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C9%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_C10() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%C10%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D1() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D1%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D2() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D2%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }


     function movimiento_bahia_D3() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D3%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D4() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D4%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D5() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D5%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D6() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D6%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D7() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D7%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }


     function movimiento_bahia_D8() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D8%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D9() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D9%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D10() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D10%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D11() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D11%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D12() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D12%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D13() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D13%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D14() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D14%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_D15() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%D15%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }


     function movimiento_bahia_E1() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E1%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E2() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E2%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E3() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E3%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E4() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E4%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E5() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E5%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E6() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E6%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E7() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E7%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E8() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E8%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E9() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E9%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

     function movimiento_bahia_E10() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E10%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    function movimiento_bahia_E11() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E11%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    function movimiento_bahia_E12() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E12%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    function movimiento_bahia_E13() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E13%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    function movimiento_bahia_E14() {
        try {
            
            $sql = "select mov_contenedor.bl_master,mov_contenedor.ubicacion,convert (varchar(20),mov_contenedor.fecha,113)as fecha
                from mov_contenedor
                inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master) 
                as EachItem
                on EachItem.fecha=mov_contenedor.fecha
                where UBICACION LIKE '%E14%'
                order by mov_contenedor.fecha desc";
                    
            $query = $this->db->query($sql);
            return $query->result_array();
        } catch (Exception $e) {
            return false;
        }
    }

    public function movimiento_contenedor_antena() {
        try {
           
            
         $this->db->select('NOM_BAHIA,bl_master_cont,fecha,ip ');
            
            $this->db->from(' vincular');
            $this->db->join('BAHIA', 'BAHIA.COD_RFID=vincular.cod1');
            $this->db->join('contenedor','contenedor.rfid_contenedor=vincular.cod2');
            $this->db->order_by('fecha ', 'asc');
           
           $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    } 

    public function get_mov_contenedor() {
        try {
           
            
            $this->db->select('CONDICION,TIPO,TIPO_CARGA,VAPOR,ANHO,TAMAÑO,DESCR_MERCADERIA,ABANDONO_LEGAL,TERMINO_DESCARGA,BL_HOUSE,MANIFIESTO,fecha_salida,OPETV_DOCUMENTO_ORIGEN_DETALLE.CONTEN_C_CODIGO,contenedor.bl_master_cont,mov_contenedor.fecha,CLIENT_C_CODIGO_CONSIGNATARIO,mov_contenedor.ubicacion,OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado, OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado,contenedor.bl_master_cont,mov_contenedor.fecha,mov_contenedor.ubicacion ');
            
            $this->db->from('contenedor');
            $this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont','left');
          
            $this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE','contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.DOCORI_C_NUMERO','left');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont','left');
        
            $this->db->order_by('mov_contenedor.fecha', 'desc');

            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }  
    
    /* los 10 primeros registros */
    
    public function get_mov_contenedor_10() {
        try {
           
            
         $this->db->select('CONDICION,TIPO,TIPO_CARGA,VAPOR,ANHO,TAMAÑO,DESCR_MERCADERIA,ABANDONO_LEGAL,TERMINO_DESCARGA,BL_HOUSE,MANIFIESTO,fecha_salida,OPETV_DOCUMENTO_ORIGEN_DETALLE.CONTEN_C_CODIGO,contenedor.bl_master_cont,mov_contenedor.fecha,CLIENT_C_CODIGO_CONSIGNATARIO,mov_contenedor.ubicacion,OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado, OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado,contenedor.bl_master_cont,mov_contenedor.fecha,mov_contenedor.ubicacion ');
            
            $this->db->from('contenedor');
            $this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont','left');
          
            $this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE','contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.DOCORI_C_NUMERO','left');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont','left');
           $this->db->where('FLAG_MOVIMIENTO',0);
            $this->db->order_by('fecha_salida', 'asc');
            $this->db->limit(10);

          /*  $this->db->select('CONDICION,TIPO,TIPO_CARGA,VAPOR,ANHO,TAMAÑO,DESCR_MERCADERIA,ABANDONO_LEGAL,TERMINO_DESCARGA,BL_HOUSE,MANIFIESTO,fecha_salida,OPETV_DOCUMENTO_ORIGEN_DETALLE.CONTEN_C_CODIGO,contenedor.bl_master_cont,mov_contenedor.fecha,CLIENT_C_CODIGO_CONSIGNATARIO,mov_contenedor.ubicacion,OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado, OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado,contenedor.bl_master_cont,mov_contenedor.fecha,mov_contenedor.ubicacion ');
            
            $this->db->from('contenedor');
            $this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont','left');
          
            $this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE','contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.DOCORI_C_NUMERO');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont');
            $this->db->order_by('fecha_salida', 'asc');
            $this->db->limit(10);*/


            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    } 
    
    
    /*bahias*/
    
     public function bahia_contenedores() {
        try {
       
            $this->db->select('ID_BAHIA,TOTAL_PISOS,ID_SUB_BAHIA,COD_SUB_BAHIA,FK_POSICION,PISO,TIPO_ESTADO,NOM_BAHIA');
            
            $this->db->from('SUB_BAHIA ');
            $this->db->join('BAHIA ', 'SUB_BAHIA.FK_BAHIA=BAHIA.NOM_BAHIA');
            $this->db->join('ESTADO_BAHIA', 'ESTADO_BAHIA.ID_ESTADO=SUB_BAHIA.ESTADO_BAHIA');
         
            
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    } 








/*  REUBCACION */

   public function get_reubicacion_contenedor() {
        try {
           
            
            $this->db->select('FECHA_FLAG_MOVIMIENTO,CONDICION,TIPO,TIPO_CARGA,VAPOR,ANHO,TAMAÑO,DESCR_MERCADERIA,ABANDONO_LEGAL,TERMINO_DESCARGA,BL_HOUSE,MANIFIESTO,fecha_salida,OPETV_DOCUMENTO_ORIGEN_DETALLE.CONTEN_C_CODIGO,contenedor.bl_master_cont,mov_contenedor.fecha,CLIENT_C_CODIGO_CONSIGNATARIO,mov_contenedor.ubicacion,OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado, OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado,contenedor.bl_master_cont,mov_contenedor.fecha,mov_contenedor.ubicacion ');
            
            $this->db->from('contenedor');
            $this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont','left');
          
            $this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE','contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.DOCORI_C_NUMERO','left');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont','left');
            $this->db->where('FLAG_MOVIMIENTO',1);
             $this->db->WHERE("ubicacion LIKE '%B'");
             $this->db->or_WHERE("ubicacion LIKE '%A'");

             $this->db->or_WHERE("ubicacion LIKE '%C'");
             $this->db->or_WHERE("ubicacion LIKE '%D'");
           $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }  
    
    /* los 10 primeros registros */
    
    public function get_reubicacion_contenedor_10() {
        try {
           
            
         $this->db->select('FECHA_FLAG_MOVIMIENTO,CONDICION,TIPO,TIPO_CARGA,VAPOR,ANHO,TAMAÑO,DESCR_MERCADERIA,ABANDONO_LEGAL,TERMINO_DESCARGA,BL_HOUSE,MANIFIESTO,fecha_salida,OPETV_DOCUMENTO_ORIGEN_DETALLE.CONTEN_C_CODIGO,contenedor.bl_master_cont,mov_contenedor.fecha,CLIENT_C_CODIGO_CONSIGNATARIO,mov_contenedor.ubicacion,OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado, OPETV_DOCUMENTO_ORIGEN_DETALLE.doorde_n_peso_manifestado,contenedor.bl_master_cont,mov_contenedor.fecha,mov_contenedor.ubicacion ');
            
            $this->db->from('contenedor');
            $this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont','left');
          
            $this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE','contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.DOCORI_C_NUMERO','left');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont','left');
           $this->db->where('FLAG_MOVIMIENTO',1);
            $this->db->order_by('fecha_salida', 'asc');
            $this->db->limit(10);
           $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    } 


    public function get_all_mov_contenedor() {
        try {
            $query = $this->db->get($this->tabla);
            return $query->result();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public function editar_mov_contenedor($datos, $id) {
        try {
            $this->db->where('id_mov_contenedor', $id);
            $this->db->update($this->tabla, $datos);
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function insert_mov_contenedor($datos) {
        try {
            $this->db->insert($this->tabla, $datos);
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function eliminar($id) {
        try {
            $this->db->delete($this->tabla, array('id_mov_contenedor' => $id));
        } catch (Exception $exc) {
            return FALSE;
        }
    }

}

?>