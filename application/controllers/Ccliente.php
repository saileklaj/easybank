<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

Class Ccliente extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Mcliente');
		$this->load->helper('url');
	}


	function cargar_prestamistas(){
		
	}

	public function index(){
		$usu_id= $this->session->userdata('usu_id');
		
		$saldo=array('saldo' =>$this->Mcliente->Msaldo($usu_id));
		
		if (is_null($saldo['saldo'])) {
			echo "string";
		}else{
			echo "NOstring";
		}


		/*$this->load->view('plantilla/head');
		$this->load->view('plantilla/header');
		$this->load->view('VinicioCli',$saldo);
		$this->load->view('plantilla/footer');*/
		$this->load->view('plantilla/header');
	}

	function cerrarsesion(){
		$this->session->sess_destroy();
		redirect(site_url('Clogin'));
	}
}