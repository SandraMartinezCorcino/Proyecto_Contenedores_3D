<?php

class Tbl_estado extends CI_Model{
    private $tabla = 'estado';

    public function __construct() {
        parent::__construct();        
    }

    public function get_all_estado(){
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