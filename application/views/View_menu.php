<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>/js/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Inscripciones</a>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-success" type="submit">Login</button>
            </form>
            </div>
        </div>
        </nav>
    <div class= "container">
        <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <a type="button" class="btn btn-primary" href="<?php echo site_url("Ctrl_evento/vista_evento");?>" target="_blank">Crear Evento</a>
        </form>
    </div>
    <div class="container" id="tabla_eventos">
    </div>
    

    <script type="text/javascript">
        listar_eventos();


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
                tabla_dinamica+="<button class='btn btn-outline-success btn-lg' onclick=\"ver_evento('"+eventos[i].id_evento+"')\">Mas</button>";
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


        function ver_evento($id)
        {
            alert($id);
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