
<input type="hidden" class="form-control" id="txb_id2">
<form>


<div class = "container main-container">
        <div class= "container-buscador">
            <div class = "search">
              <input type="text" class="input-buscador" placeholder="Buscar eventos" id="txb_id_buscar">

              <button class="btn-buscador" onclick="buscar_curso()"><i class="fa fa-search search-icon "></i></button>
            </div>
            <td><button type='button' class="boton-crear" data-toggle='modal' data-target='#ventana_actualizar' id="editar_bien">crear curso</button></td>     
        </div>

<div class = 'modal fade' id = 'ventana_actualizar' tabindex = '-1' role='dialog' aria-labelledby="">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLiveLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Título modal</font></font></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
          </button>
        </div>
        <div class="modal-body">
          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ingrese los datos para guardar</font></font></p>
      <input type="hidden" class="form-control" id="txb_id_cursop">

      <div class="form-group">
      <input type="hidden" class="form-control" id="txb_id_curso">
      </div>

      <div class="form-group">
        <label for="txb_titulo_curso">Título:</label>
        <input type="text" class="form-control" id="txb_titulo_curso">
      </div>

      <div class="form-group">
        <label for="txb_sacramento_curso">Tipo de sacramento:</label>
        <select name="tabla_sacramentos" class="custom-select" id="tabla_sacramentos">
        </select>
      </div>

      <div class="form-group">
        <label for="txb_tipo_curso">Tipo de curso:</label>
        <select name="tabla_tipos_curso" class="custom-select" id="tabla_tipos_curso">
        </select>
      </div>

      <div class="form-group">
        <label for="txb_fecha_inicio_curso">Fecha de inicio:</label>
        <input type="datetime-local" class="form-control" id="txb_fecha_inicio_curso">
      </div>
      
      <div class="form-group">
        <label for="txb_fecha_final_curso">Fecha final:</label>
        <input type="datetime-local" class="form-control" id="txb_fecha_final_curso">
      </div>

      <div class="form-group">
        <label for="txb_descripcion_curso">Descripcion del curso:</label>
        <input type="text" class="form-control" id="txb_descripcion_curso">
      </div>
      
      
      
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cerrar</font></font></button>
          <button type="button" class="btn btn-success"  onclick = "guardar_curso();" data-dismiss="modal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar</font></font></button>
        </div>
      </div>
  </div>
</div>

</div>

<div class="container-cursos" id="tabla_cursos">
</div>



<!--
<div class="container" id="tabla_eventos">
</div>
<div class="container" id="tabla_inscripciones">
</div>


<div class="container">
<input type="hidden" class="form-control" id="txb_id3">
<form>
    <div class="form-group">
      <label for="txb_id_sacramento2">id_sacramento:</label>
      <input type="text" class="form-control" id="txb_id_sacramento2">
    </div>
    <div class="form-group">
      <label for="txb_tipo_sacramento"> tipo_sacramento:</label>
      <input type="text" class="form-control" id="txb_tipo_sacramento">
    </div>
    <div class="form-group">
      <label for="txb_borrado2"> borrado:</label>
      <input type="text" class="form-control" id="txb_borrado2">
    </div>
 
 
    </form>
  <button class="btn btn-outline-success btn-lg" onclick="guardar_sacramento()">Guardar</button>
  <button class="btn btn-outline-success btn-lg" onclick="a()">buscar</button>
 
</div>

<div class="container" id="tabla_sacramentos">
</div>

-->


