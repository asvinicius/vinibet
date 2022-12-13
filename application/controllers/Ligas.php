<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ligas extends CI_Controller {
    public function index() {
        $this->load->model('LigaModel');
		$liga = new LigaModel();
		
		$data = $liga->listing();
		
		$content = array("ligas" => $data);
		
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('ligas', $content);
        $this->load->view('template/footer');
    }
}