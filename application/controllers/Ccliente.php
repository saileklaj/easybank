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
		$usu_id= $this->session->userdata('idusu');
		
		$saldo=/*array('saldo' =>*/$this->Mcliente->Msaldo($usu_id);//);
		//print_r($saldo);
		if ($saldo/*['saldo']*/) {
			///////////////////////////
			for ($i=0; $i<count($saldo); $i++) {
				$consulta=$saldo[$i];
			}
			$datos=array('saldo' =>$consulta['cta_saldo'],
						'fechacuota'=>$consulta['cuo_fecha'],
						'cantidadcuota'=>$consulta['cuo_cantidad']);
			////////////////////////////
		}else{
			$datos=array('saldo' =>0,
						'fechacuota'=>"",
						'cantidadcuota'=>0);
			
		}
		//print_r($datos);
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