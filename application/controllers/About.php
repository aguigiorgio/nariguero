<?php defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->helper(array('url','form'));
      $this->load->library('form_validation');
    }

    public function contacto()
    {
      $data['titulo'] = "Contacto";

      #validación de campos
      $this->form_validation->set_rules('nombre','Nombre', 'required|regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]/]');
      $this->form_validation->set_rules('correo','Correo Electrónico', 'required|valid_email');
      $this->form_validation->set_rules('asunto','Asunto', 'required|regex_match[/^[a-zA-ZñÑáéíóúÁÉÍÓÚ]/]');
      $this->form_validation->set_rules('mensaje','Mensaje', 'required');

      if ($this->form_validation->run() == false) {
        $this->load->view('header',$data);
        $this->load->view('contacto');
        $this->load->view('footer');
      }else{
        $campo = $this->input->post();
        $data = array(
          'nombre_contacto' => $campo['nombre'],
          'asunto_contacto' => $campo['asunto'],
          'correo_contacto' => $campo['correo'],
          'mensaje_contacto' => ltrim($campo['mensaje']),
        );
        $this->db->insert('tbl_contacto',$data);
        $data['mensaje'] ="Ok";
        $data['titulo'] = "Contacto";
        $this->load->view('header',$data);
        $this->load->view('contacto');
        $this->load->view('footer');
      }
    }

    public function mision()
    {
      $data['titulo'] = "Misión y visión";
      $this->load->view('header',$data);
      $this->load->view('mision');
      $this->load->view('footer');
    }

    public function valores()
    {
      $data['titulo'] = "Valores";
      $this->load->view('header',$data);
      $this->load->view('valores');
      $this->load->view('footer');
    }

    public function politicas()
    {
      $data['titulo'] = "Política de privacidad";
      $this->load->view('header',$data);
      $this->load->view('politicas');
      $this->load->view('footer');
    }

    public function condiciones()
    {
      $data['titulo'] = "Condiciones de uso";
      $this->load->view('header',$data);
      $this->load->view('condiciones');
      $this->load->view('footer');
    }

    public function FAQ()
    {
      $data['titulo'] = "Preguntas frecuentes";
      $this->load->view('header',$data);
      $this->load->view('faq');
      $this->load->view('footer');
    }
}
