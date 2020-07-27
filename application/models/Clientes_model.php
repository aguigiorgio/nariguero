<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class clientes_model extends CI_model{

  function registro_cliente()
  {
    # code...
    $data = array(
      'nombre_cliente' => $_POST['nombre']." ".$_POST['apaterno']." ".$_POST['amaterno'],
      'direccion_cliente' => $_POST['domicilio'],
      'ciudad_cliente' => $_POST['ciudad'],
      'calle_cliente' => $_POST['calle'],
      'numero_cliente' => $_POST['numero'],
      'telefono_cliente' => $_POST['telefono'],
      'email_cliente' => $_POST['email'],
      'contrasenia_cliente' => md5($_POST['contrasenia'])
    );
    $this->db->insert('tbl_cliente',$data);
    return true;
  }

}
?>
