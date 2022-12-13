<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
    public function index() {
        //$this->load->model('NewsModel');
		//$news = new NewsModel();
		
		//$listingnews = $news->listfront();
		
		//$content = array("notice" => $listingnews);
		
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('inicio');
        $this->load->view('template/footer');
    }
}