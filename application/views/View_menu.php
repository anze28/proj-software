 


    <div class = "container">

    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit">Buscar</button>
    <button class="btn btn-success" id = "crear_evento" data-toggle="modal" data-target="#ventanaModal">Crear Evento</button>


        <div class="modal fade" id="ventanaModal" tabindex = "-1" role="dialog" aria-labelledby="tituloventana" area-hidden="true">
            <div class="modal-dialog" role="document">
                <div class = "modal-content">
                    <div class = "modal-header">
                            <h5 id = "tituloventana">Titulo de la ventana modal</h5>
                            <button class="close" data-dismiss="modal" aria-label="Cerrar"></button>
                            <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div id="advertencia">
                        </div>
                        <form action="">
                                <input type="hidden" class="form-control" id="txb_id_evento">
                            <div class="form-group">
                                <label>Titulo de Evento</label>
                                <input type="text" class="form-control" id="txb_titulo" placeholder="Ingrese el titulo de evento">
                            </div>
                            <div class="form-group">
                                <label>Tipo de Evento</label>
                                <select class="form-control " id="txb_tipo">
                                    <option value="1">Misa</option>
                                    <option value="2">Visita</option>
                                    <option value="3">Viaje</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Fecha de Inicio</label>
                                <input type="datetime-local" class="form-control" id="txb_fecha_inicio"placeholder="Ingrese el titulo de evento">
                            </div>
                            <div class="form-group">
                                <label>Fecha de Finalizacion</label>
                                <input type="datetime-local" class="form-control" id="txb_fecha_final">
                            </div>
                            <div class="form-group">
                                <label>Lugar de Evento</label>
                                <input type="text" class="form-control" id="txb_lugar" placeholder="Ingrese el lugar del evento">
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <textarea class="form-control" rows="3" id="txb_descripcion"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                            <button class="btn btn-danger" type="button" onclick="limpiar_campos()" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-success" type="button" onclick="limpiar_campos()">Limpiar Campos</button>
                            <button class="btn btn-success" type="button" onclick="modificar_evento()" data-dismiss="modal">Modificar</button>
                            <button class="btn btn-success" type="submit" onclick="validar_guardar()" data-dismiss="modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
    

<div class="container" id="tabla_eventos">
    </div>
    

    <script type="text/javascript">
        listar_eventos();

        function validar_guardar()
        {
            var id = $("#txb_id_evento").val().length;
            if(id == 0)
            {
                guardar_evento()
            }
            else
            {
                alert("No se puede guardar");
            }
        }

        function guardar_evento(){
            $.ajax({
            method:"POST",
            url:"<?php echo site_url("Ctrl_evento/guardar");?>",
            data:{
            vtitulo :$("#txb_titulo").val(),
            vtipo :$("#txb_tipo").val(),
            vfecha_ini :$("#txb_fecha_inicio").val(),
            vfecha_fin :$("#txb_fecha_final").val(),
            vlugar :$("#txb_lugar").val(),
            vdescripcion :$("#txb_descripcion").val(),
            vusuario : 1,
            vusuario_reg : 1 
            },
            success: function(){
                limpiar_campos();
                window.location.reload();
            },
            });
        }

        function modificar_evento(){
            $.ajax({
            method:"POST",
            url:"<?php echo site_url("Ctrl_evento/modificar");?>",
            data:{
            vid : $("#txb_id_evento").val(),
            vtitulo :$("#txb_titulo").val(),
            vtipo :$("#txb_tipo").val(),
            vfecha_ini :$("#txb_fecha_inicio").val(),
            vfecha_fin :$("#txb_fecha_final").val(),
            vlugar :$("#txb_lugar").val(),
            vdescripcion :$("#txb_descripcion").val(),
            //vusuario : 1,
            vusuario_reg : 1 
            },
            success: function(){
                limpiar_campos();
                window.location.reload();
            },
            });
        }



        function limpiar_campos(){
            $("#txb_id_evento").val("");
            $("#txb_titulo").val("");
            $("#txb_tipo").val("");
            $("#txb_fecha_inicio").val("");
            $("#txb_fecha_final").val("");
            $("#txb_lugar").val("");
            $("#txb_descripcion").val("");
        }

        function listar_eventos(){
        $.ajax({
            method:"POST",
            url:"<?php echo site_url("Ctrl_evento/obtener_todos_los_eventos");?>",
            data:{
            },
            success: function(eventos){
            crear_tabla_eventos(eventos);
            },
            dataType:'json'
        });

        }

        function crear_tabla_eventos(eventos){
            if(eventos.length >0)
            {

            var tabla_dinamica="<table class='table table-striped'>";
            tabla_dinamica+="";
            
            tabla_dinamica+="<tr>";
            
            tabla_dinamica+="<th>Titulo</th>";
            tabla_dinamica+="<th>Tipo</th>";
            tabla_dinamica+="<th>Fecha de inicio</th>";
            tabla_dinamica+="<th>Fecha de Finalizacion</th>";
            tabla_dinamica+="<th>Acciones</th>";
            tabla_dinamica+="</tr>";
            
            var i;
            for(i=0;i<eventos.length;i++)
            {
                tabla_dinamica+="<tr>";
                
                tabla_dinamica+="<td>"+eventos[i].titulo_evento+"</td>";
                if(eventos[i].id_tipo_evento==1)
                    tabla_dinamica+="<td>"+"Misa"+"</td>";
                if(eventos[i].id_tipo_evento==2)
                    tabla_dinamica+="<td>"+"Visita"+"</td>";
                if(eventos[i].id_tipo_evento==3)
                    tabla_dinamica+="<td>"+"Viaje"+"</td>";
                tabla_dinamica+="<td>"+eventos[i].fecha_inicio+"</td>";
                tabla_dinamica+="<td>"+eventos[i].fecha_finalizacion+"</td>";
                tabla_dinamica+="<td>";
                
                tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"visualizar_evento('" +eventos[i].id_evento+"','"+eventos[i].titulo_evento+"','"+eventos[i].id_tipo_evento+"','"+eventos[i].fecha_inicio+"','"+eventos[i].fecha_finalizacion+"','"+eventos[i].lugar+"','"+eventos[i].descripcion_de_evento+"')\">Mas</button>";
                tabla_dinamica+="<button class='btn btn-outline-danger btn-lg' onclick=\"eliminar_evento('"+eventos[i].id_evento+"')\">Eliminar</button>";
                
                tabla_dinamica+="</td>";
                tabla_dinamica+="</tr>";
            }
            tabla_dinamica+="</table>";
            $("#tabla_eventos").html(tabla_dinamica);
            
            }
            else
            {
                $("#tabla_eventos").html('<div class="alert alert-info"><strong> No hay eventos que mostrar<strong></div>');
            }
        }

        function visualizar_evento(id,titulo,tipo,fechain,fechafin,lugar,descripcion)
        {
            $("#txb_id_evento").val(id);
            $("#txb_titulo").val(titulo);
            $("#txb_tipo").val(tipo);
            $("#txb_fecha_inicio").val(fechain);
            $("#txb_fecha_final").val(fechafin);
            $("#txb_lugar").val(lugar);
            $("#txb_descripcion").val(descripcion);
            $("#crear_evento").click();
        }




        function eliminar_evento(id){
            $.ajax({
                method:"POST",
                url:"<?php echo site_url("Ctrl_evento/eliminar_evento");?>",
                data:{
                vid :id
                },
                success: function(){
                listar_eventos();
                },

            });

        }

    </script>
    

</body>