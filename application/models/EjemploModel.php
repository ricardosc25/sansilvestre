<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EjemploModel extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function mostrar(){
		
		// $this->db->limit(10);
		$this->db->order_by("username", "asc");
		$query = $this->db->get('tbl_users');
		if ($query->num_rows() > 0){
			return $query;
		}
		else
		{
			return FALSE;
		}

	}
	public function verificar($data){
		$query = $this->db->get_where('tbl_users', array('username' => $data['username']));
		if ($query->num_rows() > 0){
					return TRUE;
				}else{
					return FALSE;
					}
	}

	public function insert($data){
			$this->db->insert('tbl_users', $data);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
	}

	public function verifica_username($username) {
        $this->db->where('username',$username);
        $consulta = $this->db->get('users');
		if($consulta->num_rows() == 1)
		{
	        $row = $consulta->row();
	        return $row->username;
		}
    }
}
?>