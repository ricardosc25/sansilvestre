<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('participantes_model');

	}
	function index(){
		$data['title'] = 'Registro';
		$data['main_content'] = 'registrar';
		$this->load->view('template',$data);
	}

	
	public function registrar(){
		$data['title'] = 'Registro';
		$data['main_content'] = 'registrar';
		$this->load->view('template',$data);
	}

	public function listaUsuarios(){
		$data = array(
			'registros' => $this->participantes_model->verTodo());
		$data['title'] = 'Registro';
		$data['main_content'] = 'lista_usuarios';
		$this->load->view('template',$data);	
		
	}

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
		$numero_ident = $this->uri->segment(3);
		$obtenerCedula = $this->participantes_model->obtenerCedula($numero_ident);
		if ($obtenerCedula != FALSE){
			foreach ($obtenerCedula->result() as $row) {
				$nombres = $row->nom_part;
				$apellidos = $row->ape_part;
			}
			$data = array(
				'num_ident_part' => $numero_ident,
				'nombres' => $nombres,
				'apellidos' => $apellidos);
		}else{
			$data = '';
			return FALSE;
		}

		$data['title'] = 'Mantenimiento de usuarios';
		$data['main_content'] = 'editar';
		$this->load->view('template',$data);
		// $data['title'] = 'Mantenimiento de usuarios';
		// $this->load->view('plantillas/header',$data);
		// $this->load->view('plantillas/menu');
		// $this->load->view('editar',$data);
		// $this->load->view('plantillas/footer');
	}

	public function editar_usuario(){
		$numero_ident = $this->uri->segment(3);
		$data = array(
			'nom_part' => $this->input->post('nombres', TRUE ),
			'ape_part' => $this->input->post('apellidos', TRUE ),
			'fec_modi' => date('Y-m-d H:i:s'));

		$this->participantes_model->editar_usuario($numero_ident, $data);
		redirect('participantes/listaUsuarios');
	}

	public function validarCedula(){
		$cedula = $_POST['numero_ident'];
		$fechaNac = $_POST['fecha_nac'];
		$fechaNacimiento = date('Y-m-d', strtotime($fechaNac));
		$data = array(
			'nom_part' => $this->input->post('nombres',TRUE),
			'ape_part' => $this->input->post('apellidos',TRUE),
			'tip_ident_part' => $this->input->post('tip_ident',TRUE),
			'num_ident_part' => $cedula,
			'sex_part' => $this->input->post('sexo',TRUE),
			'tip_sang_part' => $this->input->post('tipo_sangre',TRUE),
			'fec_naci_part' => $fechaNacimiento,
			'pais_part' => $this->input->post('pais',TRUE),
			'ciudad_part' => $this->input->post('ciudad',TRUE),
			'dire_part' => $this->input->post('direccion',TRUE),
			'barrio_part' => $this->input->post('barrio',TRUE),
			'celu_part' => $this->input->post('celular',TRUE),
			'email_part' => $this->input->post('email',TRUE),
			'email_conf_part' => $this->input->post('conf_email',TRUE),
			'fec_creacion' => date('Y-m-d H:i:s'));

		$consult = $this->participantes_model->verf_ident($data);


		if ($consult !=TRUE){
			$this->participantes_model->guardar($data);
			echo 1;
		}else{
			echo 0;

		}
	}

	public function guardar(){
		
	}

	public function check_num_ident($num_ident){
		$consult = $this->participantes_model->verf_ident($num_ident);

		 if ($consult)
        {
                  //set Error message.
                  $this->form_validation->set_message('check_num_ident', ' El %s ya existe en la base de datos');
                  return FALSE;
        }
        else
        {
                  //after satisfying our conditions return TRUE to the origin with no errors.
                  return TRUE;
        }
		
	}


} 

	?>