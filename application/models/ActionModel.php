<?php
class ActionModel extends CI_Model{
    
    protected $act_id;
    protected $act_casa;
    protected $act_fora;
    protected $act_cabr;
    protected $act_cabm;
    protected $act_caba;
    protected $act_cabd;
    protected $act_cabp;
    protected $act_fabr;
    protected $act_fabm;
    protected $act_faba;
    protected $act_fabd;
    protected $act_fabp;
    protected $act_cabrcg;
    protected $act_cabmcg;
    protected $act_cabacg;
    protected $act_cabdcg;
    protected $act_cabpcg;
    protected $act_fabrcg;
    protected $act_fabmcg;
    protected $act_fabacg;
    protected $act_fabdcg;
    protected $act_fabpcg;
    protected $act_status;
    
    function __construct() {
        parent::__construct();

        $this->setAct_id(null);
        $this->setAct_casa(null);
        $this->setAct_fora(null);
        $this->setAct_cabr(null);
        $this->setAct_cabm(null);
        $this->setAct_caba(null);
        $this->setAct_cabd(null);
        $this->setAct_cabp(null);
        $this->setAct_fabr(null);
        $this->setAct_fabm(null);
        $this->setAct_faba(null);
        $this->setAct_fabd(null);
        $this->setAct_fabp(null);
        $this->setAct_cabrcg(null);
        $this->setAct_cabmcg(null);
        $this->setAct_cabacg(null);
        $this->setAct_cabdcg(null);
        $this->setAct_cabpcg(null);
        $this->setAct_fabrcg(null);
        $this->setAct_fabmcg(null);
        $this->setAct_fabacg(null);
        $this->setAct_fabdcg(null);
        $this->setAct_fabpcg(null);
        $this->setAct_status(null);
    }
    
    public function save($data = null) {
        if ($data != null) {
            if ($this->db->insert('action', $data)) {
                return true;
            }
        }
    }
	
    public function update($data = null) {
        if ($data != null) {
            $this->db->where("act_id", $data['act_id']);
            if ($this->db->update('action', $data)) {
                return true;
            }
        }
    }
	
    public function delete($act_id) {
        if ($act_id != null) {
            $this->db->where("act_id", $act_id);
            if ($this->db->delete("action")) {
                return true;
            }
        }
    }
    
    public function listing(){
        $this->db->select("*");
		$this->db->join('time as th', 'act_casa=th.time_id', 'inner');
		$this->db->join('time as ta', 'act_fora=ta.time_id', 'inner');
        $this->db->order_by("act_id", "desc");
        return $this->db->get("action")->result();
    }
    
    public function listingall($time_id){
        $this->db->where("act_casa", $time_id);
        $this->db->or_where("act_fora", $time_id);
        $this->db->order_by("act_id", "desc");
        return $this->db->get("action")->result();
    }
    
    public function lastfiveall($time_id){
        $this->db->where("act_casa", $time_id);
        $this->db->or_where("act_fora", $time_id);
        $this->db->order_by("act_id", "desc");
        return $this->db->get("action", 5, 0)->result();
    }
    
    public function lastfivehome($time_id){
        $this->db->where("act_casa", $time_id);
        $this->db->order_by("act_id", "desc");
        return $this->db->get("action", 5, 0)->result();
    }
    
    public function lastfiveaway($time_id){
        $this->db->where("act_fora", $time_id);
        $this->db->order_by("act_id", "desc");
        return $this->db->get("action", 5, 0)->result();
    }

    public function search($act_id) {
        $this->db->where("act_id", $act_id);
        return $this->db->get("action")->row_array();
    }
    
    public function lastinsert() {
        return $this->search($this->db->insert_id("action"));
    }
    
    function getAct_id(){
		return $this->act_id;
	}

	function setAct_id($act_id){
		$this->act_id = $act_id;
	}

	function getAct_casa(){
		return $this->act_casa;
	}

	function setAct_casa($act_casa){
		$this->act_casa = $act_casa;
	}

	function getAct_fora(){
		return $this->act_fora;
	}

	function setAct_fora($act_fora){
		$this->act_fora = $act_fora;
	}

	function getAct_cabr(){
		return $this->act_cabr;
	}

	function setAct_cabr($act_cabr){
		$this->act_cabr = $act_cabr;
	}

	function getAct_cabm(){
		return $this->act_cabm;
	}

	function setAct_cabm($act_cabm){
		$this->act_cabm = $act_cabm;
	}

	function getAct_caba(){
		return $this->act_caba;
	}

	function setAct_caba($act_caba){
		$this->act_caba = $act_caba;
	}

	function getAct_cabd(){
		return $this->act_cabd;
	}

	function setAct_cabd($act_cabd){
		$this->act_cabd = $act_cabd;
	}

	function getAct_cabp(){
		return $this->act_cabp;
	}

	function setAct_cabp($act_cabp){
		$this->act_cabp = $act_cabp;
	}

	function getAct_fabr(){
		return $this->act_fabr;
	}

	function setAct_fabr($act_fabr){
		$this->act_fabr = $act_fabr;
	}

	function getAct_fabm(){
		return $this->act_fabm;
	}

	function setAct_fabm($act_fabm){
		$this->act_fabm = $act_fabm;
	}

	function getAct_faba(){
		return $this->act_faba;
	}

	function setAct_faba($act_faba){
		$this->act_faba = $act_faba;
	}

	function getAct_fabd(){
		return $this->act_fabd;
	}

	function setAct_fabd($act_fabd){
		$this->act_fabd = $act_fabd;
	}

	function getAct_fabp(){
		return $this->act_fabp;
	}

	function setAct_fabp($act_fabp){
		$this->act_fabp = $act_fabp;
	}

	function getAct_cabrcg(){
		return $this->act_cabrcg;
	}

	function setAct_cabrcg($act_cabrcg){
		$this->act_cabrcg = $act_cabrcg;
	}

	function getAct_cabmcg(){
		return $this->act_cabmcg;
	}

	function setAct_cabmcg($act_cabmcg){
		$this->act_cabmcg = $act_cabmcg;
	}

	function getAct_cabacg(){
		return $this->act_cabacg;
	}

	function setAct_cabacg($act_cabacg){
		$this->act_cabacg = $act_cabacg;
	}

	function getAct_cabdcg(){
		return $this->act_cabdcg;
	}

	function setAct_cabdcg($act_cabdcg){
		$this->act_cabdcg = $act_cabdcg;
	}

	function getAct_cabpcg(){
		return $this->act_cabpcg;
	}

	function setAct_cabpcg($act_cabpcg){
		$this->act_cabpcg = $act_cabpcg;
	}

	function getAct_fabrcg(){
		return $this->act_fabrcg;
	}

	function setAct_fabrcg($act_fabrcg){
		$this->act_fabrcg = $act_fabrcg;
	}

	function getAct_fabmcg(){
		return $this->act_fabmcg;
	}

	function setAct_fabmcg($act_fabmcg){
		$this->act_fabmcg = $act_fabmcg;
	}

	function getAct_fabacg(){
		return $this->act_fabacg;
	}

	function setAct_fabacg($act_fabacg){
		$this->act_fabacg = $act_fabacg;
	}

	function getAct_fabdcg(){
		return $this->act_fabdcg;
	}

	function setAct_fabdcg($act_fabdcg){
		$this->act_fabdcg = $act_fabdcg;
	}

	function getAct_fabpcg(){
		return $this->act_fabpcg;
	}

	function setAct_fabpcg($act_fabpcg){
		$this->act_fabpcg = $act_fabpcg;
	}

	function getAct_status(){
		return $this->act_status;
	}

	function setAct_status($act_status){
		$this->act_status = $act_status;
	}
}