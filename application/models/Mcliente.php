<?php
class Mcliente extends CI_Model{

	function Msaldo($usu_id){
		//echo "id de usuario: ",$usu_id;
		$res=$this->db->query("call saldo('$usu_id')");
		if($res->num_rows()>0){
			return $res->result_array();
		}else{
			return false;
		}
	}

	function consultar_prestamistas(){
		
	}
}