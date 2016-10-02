<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	

	function guardar($datosObtenidosForm){
		$this->db->insert('participantes', $datosObtenidosForm);
	}


	// function verTodo(){
	// 	// $this->db->limit(4);
	// 	$this->db->order_by("nom_part", "asc");
	// 	$query = $this->db->get('participantes');
	// 	if ($query->num_rows() > 0){
	// 		return $query;
	// 	}
	// 	else
	// 	{
	// 		return FALSE;
	// 	}
	// }

	function buscar($query){
		$this->db->like('ced_part', $query);
		$query = $this->db->get('participantes');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function eliminarCedula($cedula){
    $this->db->where('ced_part', $cedula);
    $this->db->delete('participantes');
  	}

  	function obtenerCedula($cedula){
    $this->db->where('ced_part', $cedula);
    $query = $this->db->get('participantes');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function totalResultados($query){
    $this->db->like('nom_part', $query);
    $this->db->or_like('ape_part', $query);
    $query = $this->db->get('participantes');
    return $query->num_rows();
  }

  function editar_usuario($cedula, $data){
    $this->db->where('ced_part', $cedula);
    $this->db->update('participantes', $data);
    
  }
}
?>