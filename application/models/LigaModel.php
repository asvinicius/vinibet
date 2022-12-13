<?php
class LigaModel extends CI_Model{
    
    protected $liga_id;
    protected $liga_nome;
    protected $liga_status;
    
    function __construct() {
        parent::__construct();
        $this->setLiga_id(null);
        $this->setLiga_nome(null);
        $this->setLiga_status(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('liga', $data)) {
                return true;
            }
        }
    }
	
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("liga_id", $data['liga_id']);
            if ($this->db->update('liga', $data)) {
                return true;
            }
        }
    }
	
    public function delete($liga_id) {
        if ($liga_id != null) {
            $this->db->where("liga_id", $liga_id);
            if ($this->db->delete("liga")) {
                return true;
            }
        }
    }
    
    public function listing(){
        $this->db->select('*');
        $this->db->order_by("liga_nome", "asc");
        return $this->db->get("liga")->result();
    }

    public function search($liga_id) {
        $this->db->where("liga_id", $liga_id);
        return $this->db->get("liga")->row_array();
    }
    
    function getLiga_id() {
        return $this->liga_id;
    }
    
    function getLiga_nome() {
        return $this->liga_nome;
    }
    
    function getLiga_status() {
        return $this->liga_status;
    }

    function setLiga_id($liga_id) {
        $this->liga_id = $liga_id;
    }

    function setLiga_nome($liga_nome) {
        $this->liga_nome = $liga_nome;
    }

    function setLiga_status($liga_status) {
        $this->liga_status = $liga_status;
    }
}