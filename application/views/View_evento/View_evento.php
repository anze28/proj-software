 


    <div class = "container main-container">
        <div class= "container-buscador">
            <div class = "search">
                <input class="input-buscador" type="search" id= "buscar" placeholder="Buscar eventos" aria-label="Search">
                <button class="btn-buscador" onclick="buscar_evento()"><i class="fa fa-search search-icon "></i></button>
            </div>
            <button class="boton-crear" id = "crear_evento" data-toggle="modal" data-target="#ventanaModal">Crear Evento</button>    
    
        </div>
    
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
                            <!-- <button class="btn btn-danger" type="button" onclick="limpiar_campos()" data-dismiss="modal">KK</button> -->
                            <button class="btn btn-success" type="button" onclick="limpiar_campos()">Limpiar Campos</button>
                            <button class="btn btn-success" type="button" onclick="modificar_evento()" data-dismiss="modal">Modificar</button>
                            <button class="btn btn-success" type="submit" onclick="validar_guardar()" data-dismiss="modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
    

<div class="container-eventos" id="tabla_eventos">
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
            
            // tabla_dinamica+="<div>";
            
            // tabla_dinamica+="<p>Titulo</p>";
            // tabla_dinamica+="<p>Tipo</p>";
            // tabla_dinamica+="<p>Fecha de inicio</p>";
            // tabla_dinamica+="<p>Fecha de Finalizacion</p>";
            // tabla_dinamica+="<p>Acciones</p>";
            // tabla_dinamica+="</div>";
            
            var i;
            for(i=0;i<eventos.length;i++)
            {
                tabla_dinamica+="<div class='container-evento-boton' onclick=\"visualizar_evento('" +eventos[i].id_evento+"','"+eventos[i].titulo_evento+"','"+eventos[i].id_tipo_evento+"','"+eventos[i].fecha_inicio+"','"+eventos[i].fecha_finalizacion+"','"+eventos[i].lugar+"','"+eventos[i].descripcion_de_evento+"')\">";
                
                tabla_dinamica+="<h4>"+eventos[i].titulo_evento+"</h4>";
                tabla_dinamica+="<div class = 'container-primary'>";
                tabla_dinamica+="<div class='container-fecha' >"; 
                    tabla_dinamica+="<p>"+eventos[i].fecha_inicio+"</p>";
                    tabla_dinamica+="<p>"+eventos[i].fecha_finalizacion+"</p>";
                    tabla_dinamica+="<p>";
                tabla_dinamica+="</div>";

                tabla_dinamica+="<div class = 'container-secundary'>"; 
                    if(eventos[i].id_tipo_evento==1)
                        tabla_dinamica+="<p class='texto-visita'>"+"Misa"+"</p>";
                    if(eventos[i].id_tipo_evento==2)
                        tabla_dinamica+="<p class='texto-visita'>"+"Visita"+"</p>";
                    if(eventos[i].id_tipo_evento==3)
                        tabla_dinamica+="<p class='texto-visita'> "+"Viaje"+"</p>";
                    tabla_dinamica+="<i class='fa fa-trash eliminar-icon' onclick=\"eliminar_evento('"+eventos[i].id_evento+"')\"></i>";
                tabla_dinamica+="</div>";
                
                // tabla_dinamica+="<button class='' onclick=\"visualizar_evento('" +eventos[i].id_evento+"','"+eventos[i].titulo_evento+"','"+eventos[i].id_tipo_evento+"','"+eventos[i].fecha_inicio+"','"+eventos[i].fecha_finalizacion+"','"+eventos[i].lugar+"','"+eventos[i].descripcion_de_evento+"')\">Mas</button>";

    
                tabla_dinamica+="</div>";
                tabla_dinamica+="</div>";
            }
           
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
        function buscar_evento(){
            $.ajax({
                method:"POST",
                url:"<?php echo site_url("Ctrl_evento/buscar");?>",
                data:{
                vtitulo : $("#buscar").val()
                },
                success: function(eventos_filtrados){
                    crear_tabla_eventos(eventos_filtrados);
                },
                dataType:'json'
            });

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