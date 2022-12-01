<?php

class Mdl_evento extends CI_MODEL
{
    function __construct()
    {  
        parent ::__construct();
    }    

    function insertar_evento($parametros)
    {
        $campos= array(
            'titulo_evento'=> $parametros['ctitulo'],
            'id_tipo_evento'=> $parametros['ctipo'],
            'fecha_inicio'=> $parametros['cfecha_inicio'],
            'fecha_finalizacion'=> $parametros['cfecha_final'],
            'lugar'=> $parametros['clugar'],
            'descripcion_de_evento'=> $parametros['cdescripcion'],
            'fecha_reg'=> $parametros['cfecha_reg'],
            'borrado'=> $parametros['cborrado'],
            'id_usuario'=> $parametros['cusuario'],
            'id_usuario_reg'=> $parametros['cusuario_reg'],
        );
        $this->db->insert('p_evento',$campos);     
    }

    function obtener_tipos_all()
    {
        $consulta="Select * from p_tipo_evento where borrado='N';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function modificar_evento($parametros)
    {

        $id =$parametros['cid'];
        $campos= array(
            'titulo_evento'=> $parametros['ctitulo'],
            'id_tipo_evento'=> $parametros['ctipo'],
            'fecha_inicio'=> $parametros['cfecha_inicio'],
            'fecha_finalizacion'=> $parametros['cfecha_final'],
            'lugar'=> $parametros['clugar'],
            'descripcion_de_evento'=> $parametros['cdescripcion'],
            'fecha_reg'=> $parametros['cfecha_reg'],
            //'borrado'=> $parametros['cborrado'],
            //'id_usuario'=> $parametros['cusuario'],
            'id_usuario_reg'=> $parametros['cusuario_reg'],
        );

        $this->db->where('id_evento', $id);
        $this->db->update('p_evento', $campos);
    }


    function obtener_eventos()
    {
        $this->db->select('*');
        $this->db->from('p_evento');
        $this->db->where('borrado', 'N');
        $query = $this->db->get();
        return $query->result_array();
    }

    function eliminar_evento($id)
    {
        $campos= array(
            'borrado'=>'S'
        );
        $this->db->where('id_evento',$id);
        $this->db->update('p_evento',$campos);
    }
    function buscar_evento($titulo)
    {
        $this->db->select('*');
        $this->db->from('p_evento');
        $this->db->like('titulo_evento',$titulo);
        $this->db->where('borrado','N');
        $query = $this->db->get();
        return $query->result_array();
    }

    
}