<?php
class Tbl_stock extends CI_Model{
 
public function __construct() {
        parent::__construct();        
    }

	public function stock(){
		try{
    
 
	 $this->db->select(' SALDO_BULTO, SALDO_PESO, SALDO_M3, UBICACION_SAVAR,AÑO,MANIFIESTO,VAPOR,BL_MASTER,CONDICION ,FECHA,ORDEN_RETIRO,OBSERVACIONES,BL_HOUSE,UBICACION,TERMINO_DESCARGA ,ABANDONO_LEGAL ,CONSIGNATORIO,DESCRIPCION_MERCADERIA,TIPO_BULT,CANT,PESO,m3');
	
	   $this ->db->from('STOCK_CS');
	    
	  
           $consulta = $this->db->get();
	   return $consulta->result();
	   throw new Exception("error aqui");
	  }
	  catch(Exception $exc) {
            echo $exc->getMessage(); 
        }
    }

    public function STOCK_BAHIA($resultado){
    try{

     /*$sql="select SUBSTRING(mov_contenedor.ubicacion,0,4)AS BAHIA,SUM(num_mov) AS TOTAL_BAHIA
			from mov_contenedor
			inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master)
			as EachItem
			on EachItem.fecha=mov_contenedor.fecha
			inner join contenedor on contenedor.bl_master_cont=mov_contenedor.bl_master
			GROUP BY SUBSTRING(mov_contenedor.ubicacion,0,4)
			HAVING SUBSTRING(mov_contenedor.ubicacion,0,4)='".$resultado."'
			ORDER BY SUBSTRING(mov_contenedor.ubicacion,0,4) ASC";*/

	$sql="select SUBSTRING(mov_contenedor.ubicacion,0,5)AS BAHIA,SUM(num_mov) AS TOTAL_BAHIA
			from mov_contenedor
			inner join (select bl_master as contenedor , max(fecha) as fecha from mov_contenedor group by bl_master)
			as EachItem
			on EachItem.fecha=mov_contenedor.fecha
			inner join contenedor on contenedor.bl_master_cont=mov_contenedor.bl_master
			GROUP BY SUBSTRING(mov_contenedor.ubicacion,0,5)
			HAVING SUBSTRING(mov_contenedor.ubicacion,0,5)='".$resultado."'
			ORDER BY SUBSTRING(mov_contenedor.ubicacion,0,5)ASC";		
     
     $query=$this->db->query($sql);	
      return $query->result();
     throw new Exception("Error Processing Request");
     
    }

    catch(Exception $exc){
    	echo $exc->getMessage();
    }


    }

    PUBLIC function BUSCAR_BAHIA($resultado2){

 		try {
 			$sql="select COD_BAHIA 
				  from BAHIA
				  where COD_BAHIA='".$resultado2."' ";
			$query=$this->db->query($sql);
			return $query->result_array();
			throw new Exception("Error Processing Request");
		 	
		 } catch (Exception $exc) {
		 	echo $exc->getMessage();
		 	
		 }

	}

	}
?>
