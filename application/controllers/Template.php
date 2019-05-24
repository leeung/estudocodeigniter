<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {
	public $data;

	public function index()
	{

		$this->pagina();

	}

	public function pagina($pagina = null){

		$data["titulo"] = "Usuarios";
		$data["usuarios"] = array("nome" => "Leeung",
								"sobrenome" => "alves");

		$this->load->view('template1/head.php',$data);

		if($pagina == null){
			$this->load->view('content/home.php');
		}else{
			$this->load->view('content/'.$pagina.'.php');	
		}
		
		$this->load->view('template1/footer.php');
	}

}
