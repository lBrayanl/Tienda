<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculadora extends CI_Controller {
    function __construct(){
        parent::__construct();

    }
    function index(){
        $this->load->view('calculadora/index');
    }
    public function suma(){
        if (isset($_POST['suma'])) {
            $ans = $_POST['numero1'] + $_POST['numero2'];
            $data = array(
                'numero1' => $_POST['numero1'],
                'numero2' => $_POST['numero2'],
                'ans' => $ans
            ); 
        } else {
            $data = array(
                'numero1' => "0",
                'numero2' => "0",
                'ans' => "0"
            );
        }
        $this->load->view('calculadora/suma', $data);
    }
    public function resta(){
        if (isset($_POST['resta'])) {
            $ans = $_POST['numero1'] - $_POST['numero2'];
            $data = array(
                'numero1' => $_POST['numero1'],
                'numero2' => $_POST['numero2'],
                'ans' => $ans
            ); 
        } else {
            $data = array(
                'numero1' => "0",
                'numero2' => "0",
                'ans' => "0"
            );
        }
        $this->load->view('calculadora/resta', $data);
    }
    public function multiplicacion(){
        if (isset($_POST['mul'])) {
            $ans = $_POST['numero1'] * $_POST['numero2'];
            $data = array(
                'numero1' => $_POST['numero1'],
                'numero2' => $_POST['numero2'],
                'ans' => $ans
            ); 
        } else {
            $data = array(
                'numero1' => "0",
                'numero2' => "0",
                'ans' => "0"
            );
        }
        $this->load->view('calculadora/multiplicacion', $data);
    }
    public function division(){
        if (isset($_POST['div'])) {
            $ans = $_POST['numero1'] / $_POST['numero2'];
            $data = array(
                'numero1' => $_POST['numero1'],
                'numero2' => $_POST['numero2'],
                'ans' => $ans
            ); 
        } else {
            $data = array(
                'numero1' => "0",
                'numero2' => "0",
                'ans' => "0"
            );
        }
        $this->load->view('calculadora/division', $data);
    }
    function volver(){
        if (isset($_POST['vol'])) {
            $this->load->view('calculadora/index');
        }
    }

}

?>