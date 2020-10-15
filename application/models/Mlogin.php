<?php 
class Mlogin extends CI_Model{

	
	function Mvalidar($usu,$pass){
		/*$this->db->where('usu_alias',$usu);
		$this->db->where('usu_contrasena',$pass);
		$res=$this->db->get('usuario');
		if($res->num_rows()>0)
			return $res->row();
		else
			return false;
		*/
		$res=$this->db->query("call login('$usu','$pass')");

		//print_r($res->usu_alias);

		if($res->num_rows()>0)
			return $res->row();
		else
			return false;
	}
}
 
