<?php

class Mdl_curso extends CI_MODEL
{
    function __construct()
    {  
        parent ::__construct();
    }    

   
    function insertar_curso($parametros)
    {
        
        $consulta = "insert into p_curso values(".$parametros['cid_usuario'].",".$parametros['cid_sacramento'].",null,".$parametros['cid_tipo_curso'].",'".$parametros['cfecha_inicio']."',
        '".$parametros['cfecha_final']."','".$parametros['cdescripcion']."',".$parametros['cid_usuario_reg'].",NOW(),'N','".$parametros['ctitulo_curso']."');" ;
        $this->db->query($consulta); 
    }


    function insertar_persona($parametros)
    {
        $campos= array(
            'nombres'=> $parametros['cnombre'],
            'apellidop'=> $parametros['capellidop'],
            'apellidom'=> $parametros['capellidom']
        );
        echo $parametros['cnombre'];
        $this->db->insert('persona',$campos);     
    }
    function insertar_sacramento($parametros)
    {
        $campos= array(
            'id_sacramento'=> $parametros['cid_sacramento'],
            'tipo_sacramento'=> $parametros['ctipo_sacramento'],
            'borrado'=> $parametros['cborrado']
        );
        echo $parametros['cid_sacramento'];
        $this->db->insert('p_sacramento',$campos);     
    }

    function modificar_curso_seguro($parametros)
    {
        $consulta = "update p_curso set id_usuario=".$parametros['cid_usuario'].", id_sacramento=".$parametros['cid_sacramento'].", id_tipo_curso=".$parametros['cid_tipo_curso'].", fecha_inicio='".$parametros['cfecha_inicio']."', fecha_final='".$parametros['cfecha_final']."', descripcion_curso='".$parametros['cdescripcion']."', titulo_curso='".$parametros['ctitulo_curso']."' where id_curso=".$parametros['cid_curso'].";";
        
        $this->db->query($consulta); 
    }

    



    function buscar_curso($cbuscar_curso)
    {
        $consulta = "select C.id_curso, C.id_sacramento, C.id_tipo_curso, C.titulo_curso, T.tipo_curso, S.tipo_sacramento, C.descripcion_curso, C.fecha_inicio, C.fecha_final from p_sacramento as S join p_curso as C on S.id_sacramento=C.id_sacramento join p_tipo_curso as T on C.id_tipo_curso=T.id_tipo_curso where C.borrado = 'N' AND C.titulo_curso like '%$cbuscar_curso%'";
        $resultado = $this->db->query($consulta);
        return $resultado->result_array();

    }

    function obtener_persona_all()
    {
        $consulta="Select * from p_persona;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }
    function obtener_curso_all()
    {
        $consulta="select C.id_curso,  C.id_sacramento, C.id_tipo_curso, C.titulo_curso, T.tipo_curso, S.tipo_sacramento, C.descripcion_curso, C.fecha_inicio, C.fecha_final from p_sacramento as S join p_curso as C on S.id_sacramento=C.id_sacramento join p_tipo_curso as T on C.id_tipo_curso=T.id_tipo_curso where C.borrado='N';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }
    function obtener_evento_all()
    {
        $consulta="Select * from p_evento;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }
    function obtener_inscripcion_all()
    {
        $consulta="Select * from p_inscripcion;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function obtener_sacramento_all()
    {
        $consulta="Select * from p_sacramento where borrado='N';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function obtener_tipo_curso_all()
    {
        $consulta="Select * from p_tipo_curso where borrado='N';";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }


    function obtener_persona_by($parametros)
    {
        $this->db->select('*');
        $this->db->from('persona');
        $this->db->like('nombres', $parametros['cnombre']);
        $this->db->like('apellidop', $parametros['capellidop']);
        $this->db->like('apellidom', $parametros['capellidom']);
        $query = $this->db->get();
        return $query->result_array();
    }

    function eliminar_persona($id)
    {
        
        
        $consulta="Delete from persona where id= '".$id."';" ;
        $this->db->query($consulta);
        
    }

    function eliminar_curso($id)
    {
        
        $consulta="Update p_curso SET borrado = 'S' where id_curso='".$id."';" ;
        $this->db->query($consulta);
        
    }



}
