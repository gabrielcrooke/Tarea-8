<?php
defined('BASEPATH') OR exit('no direct script access allowed');

class Web extends CI_Controller{

  public function _construct()
  {
     parent::_construct();
     //codeigniter : Write Less Do More
      }

      function index()
      {
        $this->load->view('inicio');
      }


      function ver_foto($cod=0){

$d= array();
$d['cod']= $cod;


$this->load->view('ver_foto', $d);
if($cod== 0){

redirect('web');

}

      }

function acerca_de(){

$this->load->view('acerca_de');

}

}
