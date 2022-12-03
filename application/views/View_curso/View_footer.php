<script type="text/javascript">
$auxiliar_id = 'default';
$id_usuario = 1;
$default = 'default';
$borrado ='N';

listar_cursos();
listar_sacramentos("null", "null");
listar_tipo_curso("null", "null");
/*
listar_eventos();
listar_inscripciones();
*/


function auxiliar_id($id_curso, $id_sacramento, $id_tipo_curso,$fecha_inicio,$fecha_final,$descripcion_curso,$titulo, $tipo_curso, $tipo_sacramento)
{
//$auxiliar_id = $id_curso;
  
  $("#txb_id_curso").val($id_curso);

  listar_sacramentos($id_sacramento, $tipo_sacramento)
  listar_tipo_curso($id_tipo_curso, $tipo_curso)
  $("#txb_fecha_inicio_curso").val($fecha_inicio);
  $("#txb_fecha_final_curso").val($fecha_final);
  $("#txb_descripcion_curso").val($descripcion_curso);
  $( "#txb_titulo_curso").val($titulo);
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


function listar_sacramentos(id_sacramento, tipo_sacramento){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_curso/obtener_sacramento");?>",
    data:{
    },
    success: function(sacramentos){
      crear_tabla_sacramento(sacramentos, id_sacramento, tipo_sacramento)
    },
    dataType:'json'
});
}


function crear_tabla_sacramento(sacramentos, id_sacramento, tipo_sacramento)
{
    if(sacramentos.length >0)
    {

      if(id_sacramento=="null")
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
        var tabla_dinamica="<option value="+id_sacramento+">"+tipo_sacramento+"</option>";
      var i;
      for(i=0;i<sacramentos.length;i++)
      {
      
        tabla_dinamica += "<option value = "+sacramentos[i].id_sacramento+"> "+sacramentos[i].tipo_sacramento+" </option>";
      
      }
      tabla_dinamica += "</select>";
      $("#tabla_sacramentos").html(tabla_dinamica);
      }
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


  function listar_tipo_curso(id_tipo_curso, tipo_curso)
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
        crear_tabla_tipo_curso(tipos_curso, id_tipo_curso, tipo_curso)
      },
      dataType:'json'
    });
  }


  function crear_tabla_tipo_curso(tipos_curso, id_tipo_curso, tipo_curso)
  {
    if(tipos_curso.length >0)
    {
      //
      if(id_tipo_curso=="null")
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
        var tabla_dinamica="<option value="+id_tipo_curso+">"+tipo_curso+"</option>";
        var i;
        for(i=0;i<tipos_curso.length;i++)
        {
          tabla_dinamica += "<option value = "+tipos_curso[i].id_tipo_curso+"> "+tipos_curso[i].tipo_curso+" </option>";
        }
        tabla_dinamica += "</select>";
        $("#tabla_tipos_curso").html(tabla_dinamica);
      }
    }
    else
    {
        var tabla_dinamica="<option value='9999'>No hay tipos de cursos creados</option>";
        tabla_dinamica += "</select>";
        $("#tabla_tipos_curso").html(tabla_dinamica);
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

    var tabla_dinamica="<table class='table table-hover'>";
      tabla_dinamica+="";

      
      var i;
      for(i=0;i<cursos.length;i++)
      {
        tabla_dinamica+="<div class='container-evento-boton' >";
          tabla_dinamica+="<h4 class= 'hover' onclick=\"auxiliar_id('" +cursos[i].id_curso+"','"+cursos[i].id_sacramento+"','"+cursos[i].id_tipo_curso+"','"+cursos[i].fecha_inicio+"','"+cursos[i].fecha_final+"','"+cursos[i].descripcion_curso+"','"+cursos[i].titulo_curso+"','"+cursos[i].tipo_curso+"','"+cursos[i].tipo_sacramento+"')\">"+cursos[i].titulo_curso+"</h4>";
          tabla_dinamica+="<div class = 'container-primary'>";
          tabla_dinamica+="<div class='container-fecha hover' onclick=\"auxiliar_id('" +cursos[i].id_curso+"','"+cursos[i].id_sacramento+"','"+cursos[i].id_tipo_curso+"','"+cursos[i].fecha_inicio+"','"+cursos[i].fecha_final+"','"+cursos[i].descripcion_curso+"','"+cursos[i].titulo_curso+"','"+cursos[i].tipo_curso+"','"+cursos[i].tipo_sacramento+"')\">"; 
            tabla_dinamica+="<p>"+cursos[i].fecha_inicio+"</p>";
            tabla_dinamica+="<p>"+cursos[i].fecha_final+"</p>";
          tabla_dinamica+="</div>"; 
        
        
          tabla_dinamica+="<div class = 'container-secundary'>"; 
            tabla_dinamica+="<p class= 'hover' onclick=\"auxiliar_id('" +cursos[i].id_curso+"','"+cursos[i].id_sacramento+"','"+cursos[i].id_tipo_curso+"','"+cursos[i].fecha_inicio+"','"+cursos[i].fecha_final+"','"+cursos[i].descripcion_curso+"','"+cursos[i].titulo_curso+"','"+cursos[i].tipo_curso+"','"+cursos[i].tipo_sacramento+"')\">"+cursos[i].tipo_curso+"</p>";
            tabla_dinamica+="<p class= 'hover' onclick=\"auxiliar_id('" +cursos[i].id_curso+"','"+cursos[i].id_sacramento+"','"+cursos[i].id_tipo_curso+"','"+cursos[i].fecha_inicio+"','"+cursos[i].fecha_final+"','"+cursos[i].descripcion_curso+"','"+cursos[i].titulo_curso+"','"+cursos[i].tipo_curso+"','"+cursos[i].tipo_sacramento+"')\">"+cursos[i].tipo_sacramento+"</p>"
            tabla_dinamica+="<i class='fa fa-trash eliminar-icon hover'  onclick=\"eliminar_curso('" +cursos[i].id_curso+ "')\"></i>";
          tabla_dinamica+="</div>"; 
          tabla_dinamica+="</div>"; 
        tabla_dinamica+="</div>";                                                                                                                                         
      }
      
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
  listar_tipo_curso("null", "null");
  listar_sacramentos("null", "null");
  
  $("#txb_id_curso").val("");
  $("#txb_fecha_inicio_curso").val("");
  $("#txb_fecha_final_curso").val("");
  $("#txb_descripcion_curso").val("");
  $("#txb_titulo_curso").val("");
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
</body>