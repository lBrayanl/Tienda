 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('curso_model');
   }
   function index(){
       $data['segmento'] = $this->uri->segment(3);
       $this->load->view('cursojuan/headers');
       if (!$data['segmento']) {
            $data['cursos'] = $this->curso_model->obtenerCursos();
       }
       else{
            $data['cursos'] = $this->curso_model->obtenerCurso($data['segmento']);
       }
       $this->load->view('cursos/cursos',$data);
   }
   function nuevo(){
    $this->load->view('cursojuan/headers');
    $this->load->view('cursos/formulario');
}
function recibirDatos(){
    $data = array(
        'nombre' => $this->input->post('nombre'),
        'videos' => $this->input->post('videos')
    );
    $this->curso_model->crearCurso($data);
    $this->load->view('cursojuan/headers');
    $this->load->view('cursojuan/bienvenido');
}
function editar(){
    $data['id'] = $this->uri->segment(3);
    $data['curso'] = $this->curso_model->obtenerCurso($data['id']);
    $this->load->view('cursojuan/headers');
    $this->load->view('cursos/editar',$data);
}
function borrar(){
    $id = $this->uri->segment(3);
    $this->curso_model->eliminarCurso($id);
   
}
function actualizar(){
    $data = array(
        'nombre' => $this->input->post('nombre'),
        'videos' => $this->input->post('videos')
    );
    $this->curso_model->actualizarCurso($this->uri->segment(3),$data);
    redirect(base_url());
}

}
?> 