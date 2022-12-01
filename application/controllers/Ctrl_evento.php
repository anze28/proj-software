<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_evento extends CI_Controller {

	function __construct()
    {
        parent ::__construct();
		$this->load->model('Mdl_evento');
    }   	


	public function index()
	{
		$this->load->view('components/navbar');
		$this->load->view('View_evento/Style_evento');
		$this->load->view('View_evento/View_evento');
		$this->load->view('components/footer');
	}

	public function vista_evento()
	{
		$this->load->view('View_head');
		$this->load->view('View_crear_evento');
	}

	public function vista_modificar()
	{	
		/*$id = $this->input->post('vid');
		$datos = [
			"id" => "parametro: " . $id
		];
		$this->load->view('evento/View_crear_evento',$datos);
		*/
		$this->load->view('View_head');
		$this->load->view('View_crear_evento');

	}

	public function obtener_todos_los_eventos()
	{
		echo json_encode($this->Mdl_evento->obtener_eventos());
	}


	public function modificar()
	{
		$id=$this->input->post('vid'); 
		$titulo=$this->input->post('vtitulo');
		$tipo=$this->input->post('vtipo');
		$fecha_inicio=$this->input->post('vfecha_ini');
		$fecha_final=$this->input->post('vfecha_fin');
		$lugar=$this->input->post('vlugar');
		$descripcion=$this->input->post('vdescripcion');
		//$usuario=$this->input->post('vusuario');
		$usuario_reg=$this->input->post('vusuario_reg');
		$fecha_reg = "NOW()";
		//$borrado = 'N';


		$parametros['cid']=$id;
		$parametros['ctitulo']=$titulo;
		$parametros['ctipo']=$tipo;
		$parametros['cfecha_inicio']=$fecha_inicio;
		$parametros['cfecha_final']=$fecha_final;
		$parametros['clugar']=$lugar;
		$parametros['cdescripcion']=$descripcion;
		$parametros['cfecha_reg']=$fecha_reg;
		//$parametros['cborrado']=$borrado;
		//$parametros['cusuario']=$usuario;
		$parametros['cusuario_reg']=$usuario_reg;

		$this->Mdl_evento->modificar_evento($parametros);
	}



	public function guardar()
	{
		$titulo=$this->input->post('vtitulo');
		$tipo=$this->input->post('vtipo');
		$fecha_inicio=$this->input->post('vfecha_ini');
		$fecha_final=$this->input->post('vfecha_fin');
		$lugar=$this->input->post('vlugar');
		$descripcion=$this->input->post('vdescripcion');
		$usuario=$this->input->post('vusuario');
		$usuario_reg=$this->input->post('vusuario_reg');
		$fecha_reg = "NOW()";
		$borrado = 'N';

		$parametros['ctitulo']=$titulo;
		$parametros['ctipo']=$tipo;
		$parametros['cfecha_inicio']=$fecha_inicio;
		$parametros['cfecha_final']=$fecha_final;
		$parametros['clugar']=$lugar;
		$parametros['cdescripcion']=$descripcion;
		$parametros['cfecha_reg']=$fecha_reg;
		$parametros['cborrado']=$borrado;
		$parametros['cusuario']=$usuario;
		$parametros['cusuario_reg']=$usuario_reg;

		$this->Mdl_evento->insertar_evento($parametros);	

	}	

	public function eliminar_evento()
	{
		$id=$this->input->post('vid');
		$this->Mdl_evento->eliminar_evento($id);
	}

	public function buscar()
	{
		$titulo=$this->input->post('vtitulo');
		echo json_encode($this->Mdl_evento->buscar_evento($titulo));
 
	}

	public function obtener_tipos()
	{
		echo json_encode($this->Mdl_evento->obtener_tipos_all());		
	}

}
