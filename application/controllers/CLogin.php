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
		$this->load->view('plantilla/footer');
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
				
				
				$this->session->set_userdata('nombreusuario',$result->usu_alias);
				//$sesion=array('nombreusuario'=>$result->usu_alias);
				//$this->session->set_userdata($sesion);
				redirect('Ccliente');
			}
		}
	}

		
}
