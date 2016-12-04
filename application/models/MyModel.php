<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
 
    public function __construct() {
        $this->load->database();
    }
 
    public function usrchk($usr) {
        $qry = "SELECT count(*) as cnt from tbl_users where username= ?";
        $res = $this->db->query($qry,array($usr))->result();
        if ($res[0]->cnt > 0) {
            echo '1';
        } else {
            echo '0';
        }
    }

    function guardar($datosObtenidosForm){
    	 $qry = "SELECT count(*) as cnt from tbl_users where username= $txtuser";
        $res = $this->db->query($qry,array($datosObtenidosForm))->result();
        if ($res[0]->cnt > 0) {
            echo 'User name exist';
        } else {
            $this->db->insert('tbl_users', $datosObtenidosForm);
        }
		
	}
}
 
}
?>