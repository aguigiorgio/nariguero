<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Logueo extends CI_Controller {

  /*Clase Logueo
  *
  *Creado por : JORGE LUIS VARGAS MÁRQUEZ
  *última actualización: 07 de noviembre de 2017 a 22:48 UTC -6
  */

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('url','form'));
    $this->load->library('form_validation');
    $this->load->model('Logueo_model');

  }

  public function iniciar_sesion()
  {
    if (isset($_SESSION['tipousuario'])) {
      switch ($_SESSION['tipousuario']) {
        case 'ADMIN':
          redirect('PanelAdministrador/index');
          break;
        case 'USUARIO':
          redirect('PanelUsuario/index');
          break;
      }
    }

    $this->form_validation->set_rules('correo','Correo electrónico', 'required|valid_email');
    $this->form_validation->set_rules('contrasena','Contraseña', 'required|min_length[4]');

    if ($this->form_validation->run() == false){
      $data['titulo'] = "Iniciar sesión";
      $this->load->view('header',$data);
      $this->load->view('iniciar_sesion');
      $this->load->view('footer');
    }else{
      if ($this->Logueo_model->validacion() != false) {
        $q = $this->Logueo_model->validacion();
        $newdata = array(
                   'idcliente'  => $q[0]->id_cliente,
                   'email'=>$q[0]->email_cliente,
                   'contrasena'  =>$q[0]->contrasenia_cliente,
                   'tipousuario' => $q[0]->tipo_cliente,
                               );
        $this->session->set_userdata($newdata);
        switch ($_SESSION['tipousuario']) {
          case "USUARIO":
            redirect('PanelUsuario/index');
            break;
          case "ADMIN":
            redirect('PanelAdministrador/index');
            break;
        }
      }else{
        $data['titulo'] = "Iniciar sesión";
        $data['mensaje'] = "NOK";
        $this->load->view('header',$data);
        $this->load->view('iniciar_sesion',$data);
        $this->load->view('footer');
      }
    }
  }

  public function cerrar_sesion()
  {
    $this->session->sess_destroy();
		redirect('Welcome');
  }

}
?>
