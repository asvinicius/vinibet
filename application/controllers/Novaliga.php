<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Novaliga extends CI_Controller {
    public function index() {
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('novaliga');
        $this->load->view('template/footer');
    }
    
    public function salvar() {
        $this->load->model('LigaModel');
		$liga = new LigaModel();
		
		$liga_nome = $this->input->post('liga_nome');
		
        $ligadata['liga_id'] = null;
		$ligadata['liga_nome'] = $liga_nome;
		$ligadata['liga_status'] = 1;
		
		if($liga->save($ligadata)){
	        redirect(base_url('ligas'));
		}
    }
}