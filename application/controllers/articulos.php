<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articulos extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('participantes_model');

	}

	function index(){
		$data['title'] = 'San Silvestre';
		$data['main_content'] = 'inicio';
		$this->load->view('template',$data);
		

	}

	public function inicio(){
		$data['title'] = 'Inicio';
		$data['main_content'] = 'inicio';
		$this->load->view('template',$data);
		

	}

	public function nosotros(){
		$data['title'] = 'Nosotros';
		$data['main_content'] = 'nosotros';
		$this->load->view('template',$data);

	}

	public function recorridos(){
		$data['title'] = 'Nosotros';
		$data['main_content'] = 'prueba';
		$this->load->view('template',$data);

	}

	public function premios(){
		echo 'Premios';

	}

	public function contacto(){
		$data['title'] = 'Contacto';
		$data['main_content'] = 'contacto';
		$this->load->view('template',$data);

	}
}
?>