<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
	function __construct(){
		parent::__construct();

	}

	function index(){
		$this->load->view('vistas/librerias');
		$this->load->view('vistas/menu');
		$this->load->view('vistas/principal');
		$this->load->view('vistas/footer');

	}

	public function link(){
		$this->load->view('vistas/librerias');
		$this->load->view('vistas/menu');
		$this->load->view('vistas/nosotros');
		$this->load->view('vistas/footer');
	}
}
?>