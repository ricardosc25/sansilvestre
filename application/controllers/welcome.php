<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Mymodel');

	}
 
	public function index(){
			$data['title'] = 'Validación';
			$data['main_content'] = 'welcome_message';
			$this->load->view('template',$data);
		}
 
        public function chk_usr()
	{             
		if(isset($_POST))
                {
                    $this->load->model('Mymodel');
                    $usr_name = $_POST['usr_name'];
                    $this->Mymodel->usrchk($usr_name ); 
                }
	}

	public function guardar(){
			// Cremos un arreglo que obtendra nuestros datos que coloquemos en el formulario de registro
			

			$datosObtenidosForm = array(
			'username' => $this->input->post('txtuser',TRUE));
		// Ahora apuntamos a nuestro modelo y le pasamos los valores que recibimos del formulario
		// que están almacenados en la variable $data
			$this->Mymodel->guardar($datosObtenidosForm);
			$data['title'] = 'Validar Usuario';
			$data['main_content'] = 'welcome_message';
			$this->load->view('template',$data);
}
}
?>