<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursojuan extends CI_Controller {
    function __construct(){
         parent::__construct();
         $this->load->helper('form');
         $this->load->model('curso_model');
    }
    function index(){
        $this->load->library('menu',array('Inicio','Contacto','Cursos','Acerda de'));
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('cursojuan/bienvenido',$data);
    }
    function holaMundo(){
        $this->load->view('cursojuan/headers');
        $this->load->view('cursojuan/bienvenido');
    }


}

?>