<?php
class Mcliente extends CI_Model{

	function Msaldo($usu_id){
		echo "id de usuario: ",$usu_id;

		$res=$this->db->query("call saldo('$usu_id')");
		//////////////////////////
		
		if($res->num_rows()>0){
			echo $res->num_rows();
			echo "si hay resultado";
			return $res->result_array();
		}else{
		///////////////
			echo "NONO hay resultado";
			return false;
		}
	}

	function consultar_prestamistas(){
		
	}
}