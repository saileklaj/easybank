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
		$datos=array('saldo'=>$this->Mcliente->Msaldo(7));
		$this->load->view('plantilla/head');
		$this->load->view('plantilla/header');
		$this->load->view('VinicioCli',$datos);
		
		$this->load->view('plantilla/footer');
	}

	function cerrarsesion(){
		$this->session->sess_destroy();
		redirect(site_url('Clogin'));
	}
}