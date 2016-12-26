<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	//Verificamos que la el número de identificación no esté creado en la base de datos
	//Para que no se duplique
	public function verf_ident($num_ident){
		$query = $this->db->get_where('participantes', array('num_ident_part' => $num_ident['numero_ident']));
		if ($query->num_rows() > 0){
					return TRUE;
				}else{
					return FALSE;
					}
	}

	public function validar_ident($num_ident){
		$this->db->select('num_ident_part')
				 ->where('num_ident_part', $num_ident);
		$query = $this->db->get('participantes');
		if ($query->num_rows() > 0){
			return TRUE;
		}
			else{
				return FALSE;
			}
		}

	public function validar_email($email){
		$this->db->select('email_part')
				 ->where('email_part', $email);
		$query = $this->db->get('participantes');
		if ($query->num_rows() > 0){
			return TRUE;
		}
			else{
				return FALSE;
			}
		}				

	public function guardar($data){
			$this->db->insert('participantes', $data);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
	}

	// function guardar($datosObtenidosForm){
	// 	$this->db->insert('participantes', $datosObtenidosForm);
	// }


	function verTodo(){
		// $this->db->limit(4);
		$this->db->order_by("nom_part", "asc");
		$query = $this->db->get('participantes');
		if ($query->num_rows() > 0){
			return $query;
		}
		else
		{
			return FALSE;
		}
	}

	function buscar($query){
		$this->db->like('num_ident_part', $query);
		$query = $this->db->get('participantes');
		if ($query->num_rows() > 0){
			return $query;
		}else{
			return FALSE;
		}
	}

	function eliminarCedula($cedula){
    $this->db->where('num_ident_part', $cedula);
    $this->db->delete('participantes');
  	}

  	function obtenerCedula($cedula){
    $this->db->where('num_ident_part', $cedula);
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
    $this->db->where('num_ident_part', $cedula);
    $this->db->update('participantes', $data);
    if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
    
  }

  function filas()
	{
		$consulta = $this->db->get('participantes');
		return  $consulta->num_rows() ;
	}
        
    //obtenemos todas las provincias a paginar con la función
    //total_posts_paginados pasando la cantidad por página y el segmento
    //como parámetros de la misma
	function total_paginados($por_pagina,$segmento) 
        {
            $consulta = $this->db->get('participantes',$por_pagina,$segmento);
            if($consulta->num_rows()>0)
            {
                foreach($consulta->result() as $fila)
		{
		    $data[] = $fila;
		}
                    return $data;
            }
	}

	function get()
	{
		$this->db->select('*');
		$this->db->from('participantes');
		$query = $this->db->get();

		return $query;

		// $fields = $this->db->field_data('nom_part');
		// $query = $this->db->select('*')->get('participantes');
		// return array("fields" => $fields, "query" => $query);
	}

	function total_registros(){
 
            $sql = "SELECT count(*) as cuenta FROM participantes";      
      $query = $this->db->query($sql);
      if($query->num_rows()>0){
            $fila=$query->row();
            return $fila->cuenta;
        }else{
            return 0;
        }
	}
}
?>