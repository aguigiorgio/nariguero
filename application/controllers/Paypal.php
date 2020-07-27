<?php

  /**
   * Jorge Luis Vargas Márquez
   */
  class Paypal extends CI_Controller
  {

    function buy() {
       //$this->load->model('product');
       $this->load->library('Paypal_lib');

       //Set variables for paypal form
       $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //test PayPal api url
       $paypalID = 'jef.gordon@nduku.mx'; //business email
       $returnURL = base_url().'index.php/Paypal/success'; //payment success url
       $cancelURL = base_url().'index.php/Paypal/cancel'; //payment cancel url
       $notifyURL = base_url().'index.php/Paypal/ipn'; //ipn url
       //get particular product data
       //$product = $this->product->getRows($id);
       $userID = 1; //current user id
       $logo = 'https://www.nariconfort.com/images/nariconfort2.png';
       $info = $this->input->post();
       $this->paypal_lib->add_field('business', $paypalID);
       $this->paypal_lib->add_field('return', $returnURL);
       $this->paypal_lib->add_field('cancel_return', $cancelURL);
       $this->paypal_lib->add_field('notify_url', $notifyURL);
       $this->paypal_lib->add_field('item_name', 'laptop');
       $this->paypal_lib->add_field('currency_code','MXN');
       $this->paypal_lib->add_field('custom', $userID);
       $this->paypal_lib->add_field('item_number', '2');
       $this->paypal_lib->add_field('quantity', $info['cantidad']);
       $this->paypal_lib->add_field('amount', $info['numero']);
       $this->paypal_lib->image($logo);

       $this->paypal_lib->paypal_auto_form();
   }

   public function success()
   {
     print "Pago realizado exitosamente";
   }

   public function cancel()
   {
     print "Su pago ha sido cancelado ¿Hubo algún problema?";
   }

   public function ipn()
   {
     echo "working";
   }

  }

 ?>
