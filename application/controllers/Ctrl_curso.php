<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_curso extends CI_Controller {
	function __construct()
    {
        parent ::__construct();
		$this->load->model('Mdl_curso');
    }   	


	public function index()
	{
		$this->load->view('View_curso/View_head');
		$this->load->view('View_curso/View_curso');
		$this->load->view('View_curso/View_footer');
		
	}
	
	public function buscar_curso()

	{
		$cbuscar_curso=$this->input->post('vbuscar_curso');
		
		echo json_encode($this->Mdl_curso->buscar_curso($cbuscar_curso));		
	}

	
	public function guardar_sacramento()
	{
		$id_sacramento=$this->input->post('vid_sacramento');
		$tipo_sacramento=$this->input->post('vtipo_sacramento');
		$borrado=$this->input->post('vborrado');

		$parametros['cid_sacramento']=$id_sacramento;
		$parametros['ctipo_sacramento']=$tipo_sacramento;
		$parametros['cborrado']=$borrado;


		


		$this->Mdl_curso->insertar_sacramento($parametros);
	}

	public function guardar()
	{
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;


		


		$this->Mdl_curso->insertar_persona($parametros);
	}


	public function guardar_curso_nuevo()

	{
		$id_usuario=$this->input->post('vid_usuario');
		$id_sacramento=$this->input->post('vid_sacramento');
		$id_curso=$this->input->post('vid_curso');
		$id_tipo_curso=$this->input->post('vid_tipo_curso');
		$fecha_inicio=$this->input->post('vfecha_inicio');
		$fecha_final=$this->input->post('vfecha_final');
		$descripcion=$this->input->post('vdescripcion');
		$id_usuario_reg=$this->input->post('vid_usuario_reg');
		$titulo_curso=$this->input->post('vtitulo_curso');

		$parametros['cid_usuario']=$id_usuario;
		$parametros['cid_sacramento']=$id_sacramento;
		$parametros['cid_curso']=$id_curso;
		$parametros['cid_tipo_curso']=$id_tipo_curso;
		$parametros['cfecha_inicio']=$fecha_inicio;
		$parametros['cfecha_final']=$fecha_final;
		$parametros['cdescripcion']=$descripcion;
		$parametros['cid_usuario_reg']=$id_usuario_reg;
		$parametros['ctitulo_curso']=$titulo_curso;



		$this->Mdl_curso->insertar_curso($parametros);
	}



	public function modificar_curso()
	{
		$id_usuario=$this->input->post('vid_usuario');
		$id_sacramento=$this->input->post('vid_sacramento');
		$id_curso=$this->input->post('vid_curso');
		$id_tipo_curso=$this->input->post('vid_tipo_curso');
		$fecha_inicio=$this->input->post('vfecha_inicio');
		$fecha_final=$this->input->post('vfecha_final');
		$descripcion=$this->input->post('vdescripcion');
		$titulo_curso=$this->input->post('vtitulo_curso');

		$parametros['cid_usuario']=$id_usuario;
		$parametros['cid_sacramento']=$id_sacramento;
		$parametros['cid_curso']=$id_curso;
		$parametros['cid_tipo_curso']=$id_tipo_curso;
		$parametros['cfecha_inicio']=$fecha_inicio;
		$parametros['cfecha_final']=$fecha_final;
		$parametros['cdescripcion']=$descripcion;
		$parametros['cid_usuario_reg']=$id_usuario_reg;
		$parametros['ctitulo_curso']=$titulo_curso;


		$this->Mdl_curso->modificar_curso_seguro($parametros);
	}





	public function eliminar()
	{

		$id=$this->input->post('vid');
		$this->Mdl_curso->eliminar_persona($id);
	}

	public function eliminar_curso()
	{

		$id=$this->input->post('vid');
		$this->Mdl_curso->eliminar_curso($id);
	}

	public function obtener_todas_las_personas()
	{
		echo json_encode($this->Mdl_curso->obtener_persona_all());		
	}

	public function obtener_curso()
	{
		echo json_encode($this->Mdl_curso->obtener_curso_all());		
	}
	public function obtener_evento()
	{
		echo json_encode($this->Mdl_curso->obtener_evento_all());		
	}
	public function obtener_inscripcion()
	{
		echo json_encode($this->Mdl_curso->obtener_inscripcion_all());		
	}

	public function obtener_sacramento()
	{
		echo json_encode($this->Mdl_curso->obtener_sacramento_all());		
	}


	public function obtener_tipo_curso()
	{
		echo json_encode($this->Mdl_curso->obtener_tipo_curso_all());		
	}


	public function obtener_todas_las_personas_by()
	{
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

	
		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;

		echo json_encode($this->Mdl_curso->obtener_persona_by($parametros));		
	}
   
}
