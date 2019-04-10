<?php

class Tbl_mov_ctn extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_mov_ctn() {
        try {
          
            $this->db->select('CONTEN_C_CODIGO ,STACKERS,TIPO,TAMAÑO,nueva_ubicacion,usuario.usuario,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVE_C_CODIGO,OPETV_DOCUMENTO_ORIGEN_DETALLE.rumbo_c_codigo ,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVIRU_C_VIAJE,OPETV_DOCUMENTO_ORIGEN_DETALLE.OPERAC_C_CODIGO ,mov_contenedor.ubicacion,fecha,mov_contenedor.ubicacion,mov_contenedor.stacker ');
            $this->db->from('contenedor');
            $this->db->join('usuario', 'contenedor.id_usuario=usuario.id','left');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE', 'contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.docori_c_numero','left');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont','left');
            $this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont','left');
           $this->db->order_by('fecha', 'DESC');
          
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function get_mov_ctn_10() {
        try {
          
            $this->db->select('CONTEN_C_CODIGO ,STACKERS,TIPO,TAMAÑO,nueva_ubicacion,usuario.usuario,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVE_C_CODIGO,OPETV_DOCUMENTO_ORIGEN_DETALLE.rumbo_c_codigo ,OPETV_DOCUMENTO_ORIGEN_DETALLE.NAVIRU_C_VIAJE,OPETV_DOCUMENTO_ORIGEN_DETALLE.OPERAC_C_CODIGO ,mov_contenedor.ubicacion,fecha,mov_contenedor.ubicacion,mov_contenedor.stacker ');
            $this->db->from('contenedor');
            $this->db->join('usuario', 'contenedor.id_usuario=usuario.id','left');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN_DETALLE', 'contenedor.bl_master_cont=OPETV_DOCUMENTO_ORIGEN_DETALLE.docori_c_numero','left');
            $this->db->join('OPETV_DOCUMENTO_ORIGEN','OPETV_DOCUMENTO_ORIGEN.DOCORI_C_NUMERO=contenedor.bl_master_cont','left');
            $this->db->join('mov_contenedor', 'mov_contenedor.bl_master=contenedor.bl_master_cont','left');
           $this->db->limit(10);
            $this->db->order_by('fecha', 'DESC');
          
            $consulta = $this->db->get();
            return $consulta->result();
            throw new Exception("error aqui");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
