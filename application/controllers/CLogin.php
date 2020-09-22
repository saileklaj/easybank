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
		$this->load->view('plantilla/header');
		$this->load->view('login');
		$this->load->view('plantilla/footer');
	}

	public function login(){
		$this->form_validation->set_rules('Username','Ingrese nombre de usuario','required');
		$this->form_validation->set_rules('Password','Ingrese contraseña','required');
		if($this->form_validation->run()==false)
			$this->index();
		else{
			$usu=$this->input->post('USername');
			$pass=$this->input->post('Password');
			$result=$this->Mlogin->Mvalidar($usu,$pass);
			if(!$result){
				$this->session->set_flashdata('er','Datos incorrectos');
				$this->index();
			}
		}


		
		$this->load->view('plantilla/header');
		$this->load->view('Welcome');
		$this->load->view('plantilla/footer');
	}
}
