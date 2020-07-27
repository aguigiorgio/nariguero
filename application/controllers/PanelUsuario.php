<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class PanelUsuario extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form'));
    $this->load->library('form_validation');
    $this->load->model('producto_model');
  }

  public function index()
  {
    $data['titulo'] ="Panel";
    $data['resultado'] = $this->producto_model->datos_producto();
    $this->load->view('header',$data);
    $this->load->view('PanelUsuario/compra',$data);
    $this->load->view('footer');
  }
}


 ?>
