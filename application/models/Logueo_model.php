<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Logueo_model extends CI_model{

public function validacion()
{
  $sql = "sELECT * FROM `tbl_cliente` WHERE `email_cliente`='".$_POST['correo']."' and `contrasenia_cliente` =md5('".$_POST['contrasena']."')";
  $query = $this->db->query($sql);
  if ($query->num_rows() == 1) {
    return $query->result();
  }else{
    return false;
  }
}

}
?>
