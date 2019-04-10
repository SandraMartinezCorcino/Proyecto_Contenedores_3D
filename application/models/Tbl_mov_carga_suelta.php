<?php
class Tbl_mov_carga_suelta extends CI_Model{


  	public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('default', TRUE);
        
         
    }

    public function get_mov_carga_suelta($id){
      /* try {   
            $this->db->where('id_mov_carga_suelta',$id);
            $query = $this->db->get($this->tabla);
            return $query->row();
        } catch (Exception $exc) {
            return FALSE;
        }*/
    }
     


        public function get_mov_almacen_cs(){
       
             try {
           
            
            $this->db->select('COD_RFID_CARGA,BL_HIJO,FECHA_MOV_CARGA_ENTRADA,IP_CARGA_SUELTA,ESTADO_CARGA');
           
            
            $this->db->from('MOV_CARGA_SUELTA ');
            $this->db->join('CARGA_SUELTA', 'CARGA_SUELTA.COD_RFID=MOV_CARGA_SUELTA.COD_RFID_CARGA');
        
            $this->db->order_by(' FECHA_MOV_CARGA_ENTRADA', 'desc');
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    } 

  	public function get_all_mov_carga_suelta(){
       
             try {
           
            
            $this->db->select('COD_RFID ,COD_SUB_CUERPOS');
            $this->db->select_max('FECHA_MOV_ANAQUEL', 'FECHA');
            
            $this->db->from('MOV_CARGA_ANAQUELES ');
            $this->db->join('SUB_CUERPOS ', 'SUB_CUERPOS.ID_SUB_CUERPOS=MOV_CARGA_ANAQUELES.ID_SUB_CUERPOS_1');
            $this->db->join('ESTADO_CUERPO ', 'ESTADO_CUERPO.ID_ESTADO_CUERPO=SUB_CUERPOS.ESTADO_CUERPO');

            $this->db->group_by("COD_RFID,COD_SUB_CUERPOS");
            $this->db->WHERE("ESTADO_CUERPOS LIKE '%OCUPADO%'");
            $this->db->order_by('FECHA', 'desc');
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    
    public function get_all_mov_carga_suelta_10(){
	  
             try {
           
            
            $this->db->select('COD_RFID ,COD_SUB_CUERPOS');
            $this->db->select_max('FECHA_MOV_ANAQUEL', 'FECHA');
            
            $this->db->from('MOV_CARGA_ANAQUELES ');
            $this->db->join('SUB_CUERPOS ', 'SUB_CUERPOS.ID_SUB_CUERPOS=MOV_CARGA_ANAQUELES.ID_SUB_CUERPOS_1');
            $this->db->join('ESTADO_CUERPO ', 'ESTADO_CUERPO.ID_ESTADO_CUERPO=SUB_CUERPOS.ESTADO_CUERPO');

            $this->db->group_by("COD_RFID,COD_SUB_CUERPOS");
            $this->db->WHERE("ESTADO_CUERPOS LIKE '%OCUPADO%'");
            $this->db->order_by('FECHA', 'desc');
            $this->db->limit(10);
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

     public function ANAQUEL() {
        try {
           
            
            $this->db->select('COD_SUB_CUERPOS ,ESTADO_CUERPOS,NOM_ANAQUEL,CUERPO');
            
            $this->db->from('SUB_CUERPOS');
            $this->db->join('ESTADO_CUERPO ', 'ESTADO_CUERPO.ID_ESTADO_CUERPO=SUB_CUERPOS.ESTADO_CUERPO');
            $this->db->order_by('CUERPO','asc');
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    } 
    
    public function editar_mov_carga_suelta($datos,$id){
        try {
            $this->db->where('id_mov_carga_suelta', $id);
            $this->db->update($this->tabla, $datos); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function insert_mov_carga_suelta($datos){
        try {
            $this->db->insert($this->tabla, $datos); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }

    public function eliminar($id){
        try {
            $this->db->delete($this->tabla, array('id_mov_carga_suelta' => $id)); 
        } catch (Exception $exc) {
            return FALSE;
        }
    }
}

?>