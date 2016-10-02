<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('participantes_model');

	}
		function index($offset=''){
			// if ($this->tank_auth->is_logged_in()) {	
			$data['title'] = 'Registro';
			$data['main_content'] = 'registrar';
			$this->load->view('template',$data);
			// }else{
			// echo "No tienes permisos para ingresar a esta opción";
			// }
		}

	
		public function registrar(){
			$data['title'] = 'Registro';
			$data['main_content'] = 'registrar';
			$this->load->view('template',$data);
		}


		public function guardar(){
			// Cremos un arreglo que obtendra nuestros datos que coloquemos en el formulario de registro
			$datosObtenidosForm = array(
			'tip_ident_part' => $this->input->post('tip_ident',TRUE),
			'ced_part' => $this->input->post('numero_ident',TRUE),
			'nom_part' => $this->input->post('nombre',TRUE),
			'ape_part' => $this->input->post('apellido',TRUE),
			'sex_part' => $this->input->post('sexo',TRUE),
			'tip_sang_part' => $this->input->post('tipo_sang',TRUE),
			'fec_naci_part' => $this->input->post('fecha_nac',TRUE),
			'pais_part' => $this->input->post('pais',TRUE),
			'dire_part' => $this->input->post('direccion',TRUE),
			'ciudad_part' => $this->input->post('ciudad',TRUE),
			'tele_part' => $this->input->post('telefono',TRUE),
			'celu_part' => $this->input->post('celular',TRUE),
			'barrio_part' => $this->input->post('barrio',TRUE),
			'email_part' => $this->input->post('email',TRUE),
			'email_conf_part' => $this->input->post('conf_email',TRUE));
		// Ahora apuntamos a nuestro modelo y le pasamos los valores que recibimos del formulario
		// que están almacenados en la variable $data
		$this->participantes_model->guardar($datosObtenidosForm);
		$data['title'] = 'Registro';
		$data['main_content'] = 'registrar';
		$this->load->view('template',$data);
		print "<script type=\"text/javascript\">alert('Se ha registrado exitosamente');</script>";
		
		}

		// public function listaUsuarios(){
		// 	$data = array(
		// 	'registros' => $this->participantes_model->verTodo());
		// 		$data['title'] = 'Registro';
		// 		$data['main_content'] = 'lista_usuarios';
		// 		$this->load->view('template',$data);	
		
		// }

		public function consultaPosicion(){
		$data = array();
		$query = $this->input->get('query', TRUE);
		if ($query) {
			$result = $this->participantes_model->buscar(trim($query));
			$total = $this->participantes_model->totalResultados(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}
			$data['title'] = 'Consultar registro';
			$data['main_content'] = 'buscar';
			$this->load->view('template',$data);
		// $this->load->view('plantillas/header');
		// $this->load->view('plantillas/menu');
		// $this->load->view('buscar',$data);
		// $this->load->view('plantillas/footer');
		}

		public function eliminar(){	
		$this->load->model('participantes_model');
		$cedula = $this->uri->segment(3);
			if ($cedula){
				$this->participantes_model->eliminarCedula($cedula);
		}
		print "<script type=\"text/javascript\">alert('El usuario ha sido eliminado exitosamente.');</script>";
		redirect('participantes/listaUsuarios');		
	}

	public function editar(){
		$cedula = $this->uri->segment(3);
		$obtenerCedula = $this->participantes_model->obtenerCedula($cedula);
		if ($obtenerCedula != FALSE){
			foreach ($obtenerCedula->result() as $row) {
				$nombres = $row->nom_part;
				$apellidos = $row->ape_part;
			}
			$data = array(
				'ced_part' => $cedula,
				'nombres' => $nombres,
				'apellidos' => $apellidos);
		}else{
			$data = '';
			return FALSE;
		}

		$this->load->view('plantillas/header');
		$this->load->view('plantillas/menu');
		$this->load->view('editar',$data);
		$this->load->view('plantillas/footer');
		}

		public function editar_usuario(){
			$cedula = $this->uri->segment(3);
			$data = array(
			'nom_part' => $this->input->post('nombres', TRUE ),
			'ape_part' => $this->input->post('apellidos', TRUE ));

			$this->participantes_model->editar_usuario($cedula, $data);
			redirect('participantes/listaUsuarios');
		}
		
	}

?>