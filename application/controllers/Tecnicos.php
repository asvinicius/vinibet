<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tecnicos extends CI_Controller {
    public function index() {
        $this->load->model('TecnicoModel');
		$tecnico = new TecnicoModel();
		
		$data = $tecnico->listing();
		
		$content = array("tecnicos" => $data);
		
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('tecnicos', $content);
        $this->load->view('template/footer');
    }
}