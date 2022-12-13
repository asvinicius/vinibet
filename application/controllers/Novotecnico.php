<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Novotecnico extends CI_Controller {
    public function index() {
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('novotecnico');
        $this->load->view('template/footer');
    }
    
    public function salvar() {
        $this->load->model('TecnicoModel');
		$tecnico = new TecnicoModel();
		
		$tecnico_nome = $this->input->post('tecnico_nome');
		
        $tecnicodata['tecnico_id'] = null;
		$tecnicodata['tecnico_nome'] = $tecnico_nome;
		$tecnicodata['tecnico_time'] = 0;
		$tecnicodata['tecnico_status'] = 1;
		
		if($tecnico->save($tecnicodata)){
	        redirect(base_url('tecnicos'));
		}
    }
}