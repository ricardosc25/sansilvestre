<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EjemploController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('EjemploModel');

	}
 
	public function index(){
			$data = array(
				'resultados' => $this->EjemploModel->mostrar(),
				'msjNoExistDB' => 'No existen registros para esta consulta');
				$data['title'] = 'Codeigniter Ejemplo';
				$data['main_content'] = 'ejemploView';
				$this->load->view('template',$data);
			}

	public function save(){
		$data = array(
			'username' => $this->input->post('nombre'),
			'fec_creacion' => date('Y-m-d H:i:s'));

		$consult = $this->EjemploModel->verificar($data);


		if ($consult !=TRUE){
			$this->EjemploModel->insert($data);
			echo "Registro guardo";
			redirect('EjemploController/index');
		}else{
			echo "Registro ya existe";

		}
	}

	public function verf(){
		$name = $_POST['nombre'];
		$data = array(
			'username' => $name,
			'apellido' => $this->input->post('apellido'),
			'fec_creacion' => date('Y-m-d H:i:s'));

		$consult = $this->EjemploModel->verificar($data);


		if ($consult !=TRUE){
			$this->EjemploModel->insert($data);
			 echo true;
			 return $data;
		}else{
			echo false;

		}
	}

}

?>