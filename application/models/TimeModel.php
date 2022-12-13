<?php
class TimeModel extends CI_Model{
    
    protected $time_id;
    protected $time_nome;
    protected $time_liga;
    protected $time_tecnico;
    protected $time_valor;
    protected $time_status;
    
    function __construct() {
        parent::__construct();
        $this->setTime_id(null);
        $this->setTime_nome(null);
        $this->setTime_liga(null);
        $this->setTime_tecnico(null);
        $this->setTime_valor(null);
        $this->setTime_status(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('time', $data)) {
                return true;
            }
        }
    }
	
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("time_id", $data['time_id']);
            if ($this->db->update('time', $data)) {
                return true;
            }
        }
    }
	
    public function delete($time_id) {
        if ($time_id != null) {
            $this->db->where("time_id", $time_id);
            if ($this->db->delete("time")) {
                return true;
            }
        }
    }
    
    public function listing(){
        $this->db->select('*');
		$this->db->join('liga', 'time_liga=liga_id', 'inner');
		$this->db->join('tecnico', 'time_tecnico=tecnico_id', 'inner');
        $this->db->order_by("time_nome", "asc");
        return $this->db->get("time")->result();
    }

    public function search($time_id) {
        $this->db->where("time_id", $time_id);
        return $this->db->get("time")->row_array();
    }
    
    public function lastinsert() {
        return $this->search($this->db->insert_id("time"));
    }
    
    function getTime_id() {
        return $this->time_id;
    }
    
    function getTime_nome() {
        return $this->time_nome;
    }
    
    function getTime_liga() {
        return $this->time_liga;
    }
    
    function getTime_tecnico() {
        return $this->time_tecnico;
    }
    
    function getTime_valor() {
        return $this->time_valor;
    }
    
    function getTime_status() {
        return $this->time_status;
    }

    function setTime_id($time_id) {
        $this->time_id = $time_id;
    }

    function setTime_nome($time_nome) {
        $this->time_nome = $time_nome;
    }

    function setTime_liga($time_liga) {
        $this->time_liga = $time_liga;
    }

    function setTime_tecnico($time_tecnico) {
        $this->time_tecnico = $time_tecnico;
    }

    function setTime_valor($time_valor) {
        $this->time_valor = $time_valor;
    }

    function setTime_status($time_status) {
        $this->time_status = $time_status;
    }
}