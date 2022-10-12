<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//$datos["minombre"]=$_GET["minombre"];
		//echo $_GET["minombre"];
		//$datos["nombre"]="moises";
		//$datos["apellido"]="silva";
        //$this->load->model("Academico_model");
        //$filas=$this->Academico_model->personas();
        //$datos["filas"]=$filas;
		$this->load->view('view_home');
	}

	public function LinkFis()
	{

		$this->load->view('./materia/fis');
	}
	public function LinkMat()
	{
		
		$this->load->view('./materia/mate');
	}
	public function LinkInfo()
	{
		
		$this->load->view('./materia/info');
	}


}