<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mlogin');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('plantilla/head');
		$this->load->view('login');
	}

	function login(){
		$this->form_validation->set_rules('Username','Ingrese Nombre de usuario',"required");
		$this->form_validation->set_rules('Password','Ingrese Contraseña',"required");
		if($this->form_validation->run()==false){
			$this->index();
		}else{
			$usuario=$this->input->post('Username');
			$password=$this->input->post('Password');
			$result=$this->Mlogin->Mvalidar($usuario,$password);
			if(!$result){
				$this->session->set_flashdata('er',' Usuario y/o contraseña incorrectos');
				$this->index();
			}else{
				//print_r($result);
				for ($i=0; $i < count($result); $i++) { 
					$resultado=$result[$i];
					$menu[$i]=$resultado['men_codigo'];
				}
				//print_r($resultado);
				$array=array("idusu"=>$resultado['usu_id'],
							 "alias"=>$resultado['usu_alias']);

				$this->session->set_userdata($array);
				$this->session->set_userdata('resultado',$menu);
				redirect('Ccliente');
			}
		}
	}		
}
