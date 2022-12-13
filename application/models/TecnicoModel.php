<?php
class TecnicoModel extends CI_Model{
    
    protected $tecnico_id;
    protected $tecnico_nome;
    protected $tecnico_time;
    protected $tecnico_status;
    
    function __construct() {
        parent::__construct();
        $this->setTecnico_id(null);
        $this->setTecnico_nome(null);
        $this->setTecnico_time(null);
        $this->setTecnico_status(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('tecnico', $data)) {
                return true;
            }
        }
    }
	
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("tecnico_id", $data['tecnico_id']);
            if ($this->db->update('tecnico', $data)) {
                return true;
            }
        }
    }
	
    public function delete($tecnico_id) {
        if ($tecnico_id != null) {
            $this->db->where("tecnico_id", $tecnico_id);
            if ($this->db->delete("tecnico")) {
                return true;
            }
        }
    }
    
    public function listing(){
        $this->db->select('*');
        $this->db->order_by("tecnico_nome", "asc");
        return $this->db->get("tecnico")->result();
    }
    
    public function listingfree(){
        $this->db->select('*');
        $this->db->where("tecnico_status", 0);
        $this->db->order_by("tecnico_nome", "asc");
        return $this->db->get("tecnico")->result();
    }

    public function search($tecnico_id) {
        $this->db->where("tecnico_id", $tecnico_id);
        return $this->db->get("tecnico")->row_array();
    }
    
    function getTecnico_id() {
        return $this->tecnico_id;
    }
    
    function getTecnico_nome() {
        return $this->tecnico_nome;
    }
    
    function getTecnico_time() {
        return $this->tecnico_time;
    }
    
    function getTecnico_status() {
        return $this->tecnico_status;
    }

    function setTecnico_id($tecnico_id) {
        $this->tecnico_id = $tecnico_id;
    }

    function setTecnico_nome($tecnico_nome) {
        $this->tecnico_nome = $tecnico_nome;
    }

    function setTecnico_time($tecnico_time) {
        $this->tecnico_time = $tecnico_time;
    }

    function setTecnico_status($tecnico_status) {
        $this->tecnico_status = $tecnico_status;
    }
}