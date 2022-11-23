<script type="text/javascript">
$auxiliar_id = 'default';
$id_usuario = 1;
$default = 'default';
$borrado ='N';

listar_cursos();
listar_sacramentos();
listar_tipo_curso();
/*
listar_eventos();
listar_inscripciones();
*/


function auxiliar_id($id_curso,$id_sacramento,$id_tipo_curso,$fecha_inicio,$fecha_final,$descripcion_curso,$titulo, $tipo_curso, $tipo_sacramento)
{
//$auxiliar_id = $id_curso;


$("#txb_id_curso").val($id_curso);
$("#txb_id_sacramento").val($id_sacramento);
$("#txb_id_tipo_curso").val($id_tipo_curso);
$("#txb_fecha_inicio_curso").val($fecha_inicio);
$("#txb_fecha_final_curso").val($fecha_final);
$("#txb_descripcion_curso").val($descripcion_curso);
$("#txb_titulo_curso").val($titulo);
$("#editar_bien").click();

}


function buscar_curso(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/buscar_curso");?>",
    data:{
      vbuscar_curso : $("#txb_id_buscar").val(), 
    },
    success: function(curso){
      crear_tabla_curso(curso);
    },
    dataType:'json'
});
}


function listar_sacramentos(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_sacramento");?>",
    data:{
    },
    success: function(sacramentos){
      crear_tabla_sacramento(sacramentos)
    },
    dataType:'json'
});
}


function crear_tabla_sacramento(sacramentos)
{
    if(sacramentos.length >0)
    {
      
      var tabla_dinamica="<option value='9999'>Seleccionar sacramento</option>";
      var i;
      for(i=0;i<sacramentos.length;i++)
      {
      
        tabla_dinamica += "<option value = "+sacramentos[i].id_sacramento+"> "+sacramentos[i].tipo_sacramento+" </option>";
      
      }
      tabla_dinamica += "</select>";
      $("#tabla_sacramentos").html(tabla_dinamica);
    }   
    else
    {
      {
        var tabla_dinamica="<option value='9999'>No hay sacramentos creados</option>";
        tabla_dinamica += "</select>";
        $("#tabla_sacramentos").html(tabla_dinamica);
      }
    }
  }


  function listar_tipo_curso()
  {
  $.ajax(
    {
      method:"POST",
      url:"<?php echo site_url("Ctrl_curso/obtener_tipo_curso");?>",
      data:
      {
      },
      success: function(tipos_curso)
      {
        crear_tabla_tipo_curso(tipos_curso)
      },
      dataType:'json'
    });
  }


  function crear_tabla_tipo_curso(tipos_curso)
  {
    if(tipos_curso.length >0)
    {
      var tabla_dinamica="<option value='9999'>Seleccionar el tipo de curso</option>";
      var i;
      for(i=0;i<tipos_curso.length;i++)
      {
      
        tabla_dinamica += "<option value = "+tipos_curso[i].id_tipo_curso+"> "+tipos_curso[i].tipo_curso+" </option>";
      
      }
      tabla_dinamica += "</select>";
      $("#tabla_tipos_curso").html(tabla_dinamica);
    }   
    else
    {
      {
        var tabla_dinamica="<option value='9999'>No hay tipos de cursos creados</option>";
        tabla_dinamica += "</select>";
        $("#tabla_tipos_curso").html(tabla_dinamica);
      }
    }
  }














function listar_inscripciones(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_inscripcion");?>",
    data:{
    },
    success: function(inscripciones){
      crear_tabla_inscripciones(inscripciones);
    },
    dataType:'json'
});

}


function crear_tabla_inscripciones(inscripciones){
    if(inscripciones.length >0)
    {
     
      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";
      
      tabla_dinamica+="<tr>";
      
      tabla_dinamica+="<th>Nombres</th>";
      tabla_dinamica+="<th>Apellido paterno</th>";
      tabla_dinamica+="<th>Apellido materno</th>";
      tabla_dinamica+="<th>Acciones</th>";
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<inscripciones.length;i++)
      {
        tabla_dinamica+="<tr>";
        
        tabla_dinamica+="<td>"+inscripciones[i].id_persona+"</td>";
        tabla_dinamica+="<td>"+inscripciones[i].id_curso+"</td>";
        tabla_dinamica+="<td>"+inscripciones[i].concluido+"</td>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"eliminar('" +inscripciones[i].id_usuario+ "')\">Eliminar</button>";
        tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"editar('" +inscripciones[i].id_usuario+"')\">editar</button>";
        tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</table>";
      $("#tabla_inscripciones").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_inscripciones").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}


function listar_eventos(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_evento");?>",
    data:{
    },
    success: function(eventos){
      crear_tabla_evento(eventos);
    },
    dataType:'json'
});

}


function crear_tabla_evento(eventos){
    if(eventos.length >0)
    {
     
      var tabla_dinamica="<table class='table table-striped'>";
      tabla_dinamica+="";
      
      tabla_dinamica+="<tr>";
      
      tabla_dinamica+="<th>Nombres</th>";
      tabla_dinamica+="<th>Apellido paterno</th>";
      tabla_dinamica+="<th>Apellido materno</th>";
      tabla_dinamica+="<th>Acciones</th>";
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<eventos.length;i++)
      {
        tabla_dinamica+="<tr>";
        
        tabla_dinamica+="<td>"+eventos[i].id_usuario+"</td>";
        tabla_dinamica+="<td>"+eventos[i].id_evento+"</td>";
        tabla_dinamica+="<td>"+eventos[i].id_tipo_evento+"</td>";
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"eliminar('" +eventos[i].id_usuario+ "')\">Eliminar</button>";
        tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"editar('" +eventos[i].id_usuario+"')\">editar</button>";
        tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";
      }
      tabla_dinamica+="</table>";
      $("#tabla_eventos").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_eventos").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}




function listar_cursos(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_curso");?>",
    data:{
    },
    success: function(cursos){
      crear_tabla_curso(cursos);
    },
    dataType:'json'
});

}


function crear_tabla_curso(cursos){
    if(cursos.length >0)
    {

      var tabla_dinamica="<table class='table table-dark table-hover'>";
      tabla_dinamica+="";
      tabla_dinamica+="<tr>";
      tabla_dinamica+="<th>Título del curso</th>";
      tabla_dinamica+="<th>Tipo de curso</th>";
      tabla_dinamica+="<th>Sacramento</th>";
      tabla_dinamica+="<th>Descripción</th>";
      tabla_dinamica+="<th>Fecha de inicio</th>";
      tabla_dinamica+="<th>Fecha final</th>";
      tabla_dinamica+="<th>Acciones</th>";
      tabla_dinamica+="</tr>";
      
      var i;
      for(i=0;i<cursos.length;i++)
      {
        tabla_dinamica+="<tr>";
        tabla_dinamica+="<td>"+cursos[i].titulo_curso+"</td>";
        tabla_dinamica+="<td>"+cursos[i].tipo_curso+"</td>";
        tabla_dinamica+="<td>"+cursos[i].tipo_sacramento+"</td>";
        tabla_dinamica+="<td>"+cursos[i].descripcion_curso+"</td>";
        tabla_dinamica+="<td>"+cursos[i].fecha_inicio+"</td>";
        tabla_dinamica+="<td>"+cursos[i].fecha_final+"</td>";
       
        tabla_dinamica+="<td>";
        tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"eliminar_curso('" +cursos[i].id_curso+ "')\">Eliminar</button>";
        tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"auxiliar_id('" +cursos[i].id_curso+"','"+cursos[i].id_sacramento+"','"+cursos[i].id_tipo_curso+"','"+cursos[i].fecha_inicio+"','"+cursos[i].fecha_final+"','"+cursos[i].descripcion_curso+"','"+cursos[i].titulo_curso+"','"+cursos[i].tipo_curso+"','"+cursos[i].tipo_sacramento+"')\">Editar</button>";
        tabla_dinamica+="</td>";
        tabla_dinamica+="</tr>";                                                                                                                                          
      }
      tabla_dinamica+="</table>";
      $("#tabla_cursos").html(tabla_dinamica);
      
    }
    else
    {
        $("#tabla_cursos").html('<div class="alert alert-info"><strong> No hay datos que mostrar<strong></div>');
    }
}

function guardar_curso(){

  if($("#txb_id_curso").val()=="")
  {
  $.ajax(
    {
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/guardar_curso_nuevo");?>",
    data:
    {
      vid_usuario :1,
      vid_sacramento :$("select#tabla_sacramentos").val(),
      vid_tipo_curso :$("select#tabla_tipos_curso").val(),
      vfecha_inicio :$("#txb_fecha_inicio_curso").val(),
      vfecha_final :$("#txb_fecha_final_curso").val(),
      vdescripcion :$("#txb_descripcion_curso").val(),
      vid_usuario_reg :1,
      vtitulo_curso :$("#txb_titulo_curso").val()
    },
    success: function(){
      limpiar_campos();
      listar_cursos();
    },

    });
  }
  else
  {
    modificar_curso();
  }
}

function limpiar_campos(){
  listar_tipo_curso();
  listar_sacramentos();
  
  $("#txb_id_curso").val("");
  $("#txb_fecha_inicio_curso").val("");
  $("#txb_fecha_final_curso").val("");
  $("#txb_descripcion_curso").val("");
  $("#txb_titulo_curso").val("");
}



function guardar_sacramento(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/guardar_sacramento");?>",
    data:{
      vid_sacramento :$("#txb_id_sacramento2").val(),
      vtipo_sacramento :$("#txb_tipo_sacramento").val(),
      vborrado :$("#txb_borrado2").val()
    },
    success: function(){
      alert('aaaaaa');
    },

});

}


function guardar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/guardar");?>",
    data:{
      vnombre :$("#txb_nombre").val(),
      vapellidop :$("#txb_apellidoP").val(),
      vapellidom :$("#txb_apellidoM").val()
    },
    success: function(){
      limpiar_campos();
    },

});

}





function editar(id,nombre,apellidop,apellidom){
  $("#txb_id").val(id);
  $("#txb_nombre").val(nombre);
  $("#txb_apellidoP").val(apellidop);
  $("#txb_apellidoM").val(apellidom);
}

function modificar_curso(){
$.ajax(
    {
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/modificar_curso");?>",
    data:
    {
      vid_usuario :1,
      vid_sacramento :$("select#tabla_sacramentos").val(),
      vid_tipo_curso :$("select#tabla_tipos_curso").val(),
      vid_curso :$("#txb_id_curso").val(),
      vfecha_inicio :$("#txb_fecha_inicio_curso").val(),
      vfecha_final :$("#txb_fecha_final_curso").val(),
      vdescripcion :$("#txb_descripcion_curso").val(),
      vid_usuario_reg :1,
      vtitulo_curso :$("#txb_titulo_curso").val()
    },
    success: function(){
      limpiar_campos();
      listar_cursos();
    },

    });

}

function eliminar(id){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/eliminar");?>",
    data:{
      vid :id
      
    },
    success: function(){

    },

});

}

function eliminar_curso(id){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/eliminar_curso");?>",
    data:{
      vid :id
      
    },
    success: function(){
      listar_cursos();
    },

});

}




</script>

<footer>
</footer>
</body>




</html>