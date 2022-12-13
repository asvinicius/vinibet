<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Novotime extends CI_Controller {
    public function index() {
        $this->load->model('TecnicoModel');
		$this->load->model('LigaModel');
		$tecnico = new TecnicoModel();
		$liga = new LigaModel();
		
		$tecnicos = $tecnico->listingfree();
		$ligas = $liga->listing();
		
		$content = array("tecnicos" => $tecnicos, "ligas" => $ligas);
		
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('novotime', $content);
        $this->load->view('template/footer');
    }
    
    public function salvar() {
        $this->load->model('TecnicoModel');
		$this->load->model('LigaModel');
		$this->load->model('TimeModel');
		$tecnico = new TecnicoModel();
		$liga = new LigaModel();
		$time = new TimeModel();
		
		$time_nome = $this->input->post('time_nome');
		$time_liga = $this->input->post('time_liga');
		$time_tecnico = $this->input->post('time_tecnico');
		$time_valor = $this->input->post('time_valor');
		
        $timedata['time_id'] = null;
		$timedata['time_nome'] = $time_nome;
		$timedata['time_liga'] = $time_liga;
		$timedata['time_tecnico'] = $time_tecnico;
		$timedata['time_valor'] = $time_valor;
		$timedata['time_status'] = 1;
		
		if($time->save($timedata)){
		    
		    $tecnicoaux = $tecnico->search($time_tecnico);
		    $lastinsert = $time->lastinsert();
		    
		    $tecnicodata['tecnico_id'] = $tecnicoaux['tecnico_id'];
    		$tecnicodata['tecnico_nome'] = $tecnicoaux['tecnico_nome'];
    		$tecnicodata['tecnico_time'] = $lastinsert['time_id'];
    		$tecnicodata['tecnico_status'] = 0;
    		
    		if($tecnico->update($tecnicodata)){
    	        redirect(base_url('times'));
    		}
		}
    }
}