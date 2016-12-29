<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('pagination');
		$this->load->model('participantes_model');

	}
	
	public function registrar(){
		$data['title'] = 'Registro';
		$data['main_content'] = 'registrar_formValidation';
		$this->load->view('template',$data);
	}

	public function consultaInscripcion(){
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
		if ($this->tank_auth->is_logged_in()) {	
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
	else{
		echo "No tienes permisos para ingresar";
	}
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
			'categoria' => $this->input->post('categoria',TRUE),
			'kilometros' => $this->input->post('kilometros',TRUE),
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
		//Arrays de validaciones
		$rules = array(

			array(
                'field' => 'nombres',
                'label' => 'Nombres',
                'rules' => 'required|strtoupper|min_length[3]|max_length[30]|xss_clean'
        		),
        	array(
                'field' => 'apellidos',
                'label' => 'Apellidos',
                'rules' => 'required|strtoupper|min_length[3]|max_length[30]|xss_clean'
                ),
			array(
                'field' => 'tip_ident',
                'label' => 'Tipo de identificación',
                'rules' => 'required|strtoupper|alpha|max_length[2]|xss_clean'
                ),
			array(
				'field' => 'numero_ident',
				'label' => 'Número de identificación',
				'rules' => 'required|numeric|min_length[6]|max_length[12]|trim|xss_clean|callback_check_ident'
				),
			array(
				'field' => 'sexo',
				'label' => 'Sexo',
				'rules' => 'required|alpha|max_length[1]|xss_clean'
				),
			array(
                'field' => 'tipo_sangre',
                'label' => 'Tipo de sangre',
                'rules' => 'required|xss_clean'
                ),
			array(
                'field' => 'fecha_nac',
                'label' => 'Fecha de nacimiento',
                'rules' => 'required|trim|xss_clean'
                ),
			 array(
                'field' => 'pais',
                'label' => 'Pais',
                'rules' => 'required|strtoupper|xss_clean'
                ),
			 array(
                'field' => 'ciudad',
                'label' => 'Ciudad',
                'rules' => 'required|strtoupper|min_length[4]|max_length[30]|xss_clean'
                ),
          array(
                'field' => 'direccion',
                'label' => 'Dirección',
                'rules' => 'required|strtoupper|min_length[8]|max_length[60]|xss_clean'
                ),
           array(
                'field' => 'barrio',
                'label' => 'Barrio',
                'rules' => 'required|strtoupper|min_length[4]|max_length[30]|xss_clean'
                ),
            array(
                'field' => 'celular',
                'label' => 'Celular',
                'rules' => 'required|numeric|min_length[7]|max_length[10]|trim|xss_clean'
                ),
             array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|strtoupper|valid_email|valid_emails|trim|xss_clean|callback_check_email'
                ),
             array(
                'field' => 'conf_email',
                'label' => 'Confirmar Email',
                'rules' => 'required|strtoupper|valid_email|valid_emails|matches[email]|trim|xss_clean'
                ),
              array(
                'field' => 'categoria',
                'label' => 'Categoría',
                'rules' => 'required|trim|xss_clean'
                ),
               array(
                'field' => 'kilometros',
                'label' => 'Kilómetros',
                'rules' => 'required|trim|xss_clean'
                )
			);

		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			$this->registrar();				
		}else{
			//CONVERTIMOS LOS DATOS INGRESADOS EN EL FORMULARIO A UTF-8 PARA QUE SEAN GUARDADOS CORRECTAMENTE EN LA BASE DE DATOS CON ACENTOS
			$nombres = ($_POST['nombres']); $nombres = mb_strtoupper($nombres, 'UTF-8');
			$apellidos = ($_POST['apellidos']); $apellidos = mb_strtoupper($apellidos, 'UTF-8');
			$ciudad = ($_POST['ciudad']); $ciudad = mb_strtoupper($ciudad, 'UTF-8');
			$direccion = ($_POST['direccion']); $direccion = mb_strtoupper($direccion, 'UTF-8');
			$barrio = ($_POST['barrio']); $barrio = mb_strtoupper($barrio, 'UTF-8');

			$fechaNac = $_POST['fecha_nac'];
			$fechaNacimiento = date('Y-m-d', strtotime($fechaNac));
			$data = array(
			'nom_part' => $nombres,
			'ape_part' => $apellidos,
			'tip_ident_part' => $this->input->post('tip_ident',TRUE),
			'num_ident_part' => $this->input->post('numero_ident', TRUE),
			'sex_part' => $this->input->post('sexo',TRUE),
			'tip_sang_part' => $this->input->post('tipo_sangre',TRUE),
			'fec_naci_part' => $fechaNacimiento,
			'pais_part' => $this->input->post('pais',TRUE),
			'ciudad_part' => $ciudad,
			'dire_part' => $direccion,
			'barrio_part' => $barrio,
			'celu_part' => $this->input->post('celular',TRUE),
			'email_part' => $this->input->post('email',TRUE),
			'email_conf_part' => $this->input->post('conf_email',TRUE),
			'categoria' => $this->input->post('categoria',TRUE),
			'kilometros' => $this->input->post('kilometros',TRUE),
			'fec_creacion' => date('Y-m-d H:i:s'));

			$this->participantes_model->guardar($data);
			
			$data['title'] = 'Registro exitoso';
			$data['main_content'] = 'message_success';
			$this->load->view('template',$data);
		}		

	}

	public function check_ident($num_ident){
			if($this->participantes_model->validar_ident($num_ident)){
				$this->form_validation->set_message('check_ident', 'El %s ya está registrado en la base de datos');
				return FALSE;
			}else{
				return TRUE;
			}
		
	}

	public function check_email($email){
			if($this->participantes_model->validar_email($email)){
				$this->form_validation->set_message('check_email', 'El %s ya está registrado en la base de datos');
				return FALSE;
			}else{
				return TRUE;
			}
		
	}

	public	function inscritos()
	{

		if ($this->tank_auth->is_logged_in()) {	
		// $data['title'] = 'Listado de usuarios';
		$data = array('title' => 'Listado de usuarios', 
                 'contadorRegistros' => $this->participantes_model->total_registros());
		$pages=30; //Número de registros mostrados por páginas
		$config['base_url'] = base_url().'participantes/inscritos/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
		$config['total_rows'] = $this->participantes_model->filas();//calcula el número de filas  
		$config['per_page'] = $pages; //Número de registros mostrados por páginas
        $config['num_links'] = 20; //Número de links mostrados en la paginación
 		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Última';//último link
        $config["uri_segment"] = 3;//el segmento de la paginación
		$config['next_link'] = 'Siguiente';//siguiente link
		$config['prev_link'] = 'Anterior';//anterior link
		$this->pagination->initialize($config); //inicializamos la paginación		
		$data["parti"] = $this->participantes_model->total_paginados($config['per_page'],$this->uri->segment(3));			
                
        //cargamos la vista y el array data
		$data['title'] = 'Listado de usuarios';
		$data['main_content'] = 'lista_participantes';
		$this->load->view('template',$data);
	}
		{
		echo "No tienes permisos para ingresar";
	}
}

	public function dowloadExcel(){
		$result = $this->participantes_model->get();
		$this->export_excel->to_excel($result, "Listado de inscritos 2016");
	}
}

?>