<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends CI_Controller {
    public function index() {
        $this->load->model('TimeModel');
		$time = new TimeModel();
		
		$data = $time->listing();
		
		$content = array("times" => $data);
		
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('times', $content);
        $this->load->view('template/footer');
    }
}