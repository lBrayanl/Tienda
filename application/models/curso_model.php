<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function crearCurso($data){
        $this->db->insert('Cursos', array('nombre'=> $data['nombre'], 'videosCurso'=> $data['videos']));
    }
    function obtenerCursos(){
        $query = $this->db->get('cursos');
    if($query->num_rows() > 0) return $query;
    else return false;

    }
    function obtenerCurso($id){
        $this->db->where('idCurso',$id);
        $query = $this->db->get('cursos');
    if($query->num_rows() > 0) return $query;
    else return false;

    }
    function actualizarCurso($id,$data){
        $datos = array(
            'nombre'=> $data['nombre'], 
            'videosCurso'=> $data['videos']
        );
        $this->db->where('idCurso',$id);
        $query = $this->db->update('cursos',$datos);
    }
    function eliminarCurso($id){
        $this->db->delete('cursos',array('idCurso'=>$id));
    }
}

?>