<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminClientes extends CI_Controller {

  /*Clase Administración de cliente
  *
  *Creado por : JORGE LUIS VARGAS MÁRQUEZ
  *última actualización: 19 de octubre de 2017 a 13:07 UTC -6
  */

  function __construct () {
        parent::__construct();
				$this->load->helper(array('url','form'));
				$this->load->library('form_validation');
				$this->load->model('clientes_model',"m");
    }

	public function index()
	{
    echo $this->convert(memory_get_usage(true));
	}

  function convert($size)
  {
      $unit=array('B','KB','MB','GB','TB','PB');
      return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
  }

  public function agregar_cliente(){
    $data['titulo']= "Agregar cliente";

    $this->form_validation->set_rules('nombre','nombre', 'required');
    $this->form_validation->set_rules('email','Correo Electrónico', 'required');
    $this->form_validation->set_rules('telefono','Teléfono', 'required');
    $this->form_validation->set_rules('apaterno','Apellido paterno', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('header',$data);
      $this->load->view('cliente/agregar');
      $this->load->view('footer');
    }else{
      if (($this->m->registro_cliente()) == true) {
        $dato['mensaje']="<div class='alert alert-success' role='alert'><i class='fa fa-check' aria-hidden='true'></i>
         <b>Registro realizado exitosamente.</b> Inicie sesión desde <a href='".base_url()."/index.php/Logueo/iniciar_sesion'>aquí</a>
        </div>";
        $this->load->view('header',$data);
        $this->load->view('cliente/agregar',$dato);
        $this->load->view('footer');
      }
    }
  }

  public function eliminar_cliente($ID){
    # Función que recorre la eliminación de un cliente en específico

  }

  public function consultar_clientes()
  {
    # función que recorre la consulta de todos los registros
    $data['titulo'] = "Registros de clientes";
    $clientes = $this->m->get_clientes();
    $this->load->view('compartido/header');
    $this->load->view('cliente/consulta');
    $this->load->view('compartido/footer');
  }

  public function consultar_cliente($ID)
  {
    # Función que recorre la consulta de un cliente en específico
  }


}
