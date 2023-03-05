<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acoes extends CI_Controller {
    public function index() {
        $this->load->model('ActionModel');
		$action = new ActionModel();
		
		$data = $action->listing();
		
		$content = array("actions" => $data);
		
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('acoes', $content);
        $this->load->view('template/footer');
    }
}