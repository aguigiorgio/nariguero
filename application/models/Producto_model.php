<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class producto_model extends CI_model{

  function datos_producto()
  {
    $sql="select * from tbl_producto where id_producto =1";
    $query = $this->db->query($sql);
    return $result = ($query->result() > 0 ) ? $query->result() : false ;
  }

}
?>
