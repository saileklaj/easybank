<?php
class Mcliente extends CI_Model{

	function Msaldo($usu_id){
		/*$res=$this->db->query("select cuo_fecha from cuotas where cuo_fecha>now() limit 1");*/
		$res=$this->db->query("call saldo('$usu_id')");
		//////////////////////////
		if($res->num_rows()>0){
			return $res->result();
		}else
		///////////////
		return $res;
	}

	function consultar_prestamistas(){
		
	}
}