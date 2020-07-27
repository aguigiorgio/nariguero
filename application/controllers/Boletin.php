<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Boletin extends CI_Controller {

  /*Clase Boletín
  *
  *Creado por : JORGE LUIS VARGAS MÁRQUEZ
  *última actualización: 10 de octubre de 2017 a 19:32 UTC -6
  */

  function __construct () {
        parent::__construct();
				$this->load->helper(array('url','form'));
				$this->load->library('form_validation');
    }

    public function suscripcion()
    {
      if ($this->comprobarmail($_POST['correo_boletin']) == true) {
        $this->form_validation->set_rules('correo_boletin','Correo', 'required|valid_email');
        if ($this->form_validation->run() == true) {
          $data = array('correo_boletin' => $_POST['correo_boletin']);
          $result = $this->db->insert('tbl_boletin',$data);
          if ($result == true) {
            //Indicación de que registro ha sido un éxito
            echo json_encode(0);
          }else{
            //Error de conexión a BDD
            echo json_encode(1);
          }
      }else{
        //Mal formato de correo electrónico
        echo json_encode(2);
      }
    }else{
      //Correo existente
      echo json_encode(3);
    }
  }

    private function comprobarmail($correo)
    {
      $this->db->select('correo_boletin');
      $this->db->from('tbl_boletin');
      $this->db->where('correo_boletin', $correo);
      if ($this->db->count_all_results() > 0) {
        return false;
      }else{
        return true;
      }
    }




}
?>
