<?php

class Cliente extends CI_Controller{

	public $crud;
	public $module;

    function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->crud = new grocery_CRUD();
        $this->crud->set_theme('datatables');
        $this->module ='tbl_cliente';
        
    }

    function index(){
    	$this->crud->set_table($this->module);
    	$output = $this->crud->render();
    	$this->load->view("example",$output);
    }


}

?>