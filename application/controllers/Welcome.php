<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct () {
				parent::__construct();
				$this->load->helper(array('url','form'));
				$this->load->library('form_validation');
				//$this->load->model('clientes_model',"m");
		}

	public function index()
	{
		$data['titulo'] = "Inicio";
		$this->load->view('header',$data);
		$this->load->view('slider');
		$this->load->view('footer');
	}
}
