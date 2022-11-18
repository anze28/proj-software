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
        <div class="container">
            <form>
                <div class="form-group">
                    <label>Titulo de Evento</label>
                    <input type="email" class="form-control" id="txb_titulo" placeholder="Ingrese el titulo de evento">
                </div>
                <div class="form-group">
                    <label>Tipo de Evento</label>
                    <select class="form-control " id="txb_tipo">
                        <option>Misa</option>
                        <option>Visita</option>
                        <option>Viaje</option>
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
                    <input type="email" class="form-control" id="txb_lugar" placeholder="Ingrese el lugar del evento">
                </div>

                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" rows="3" id="txb_descripcion"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Limpiar</button>
                <button type="submit" class="btn btn-primary" onclick="guardar_evento()">Crear</button>
            </form>
        </div>
<script type="text/javascript">

function guardar_evento(){
    $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_bienvenida/guardar");?>",
    data:{
      vtitulo :$("#txb_titulo").val(),
      vapellidop :$("#txb_apellidoP").val(),
      vapellidom :$("#txb_apellidoM").val()
    },
    success: function(){
      limpiar_campos();
    },

});

}

function guardar(){
  $.ajax({
    method:"POST",
    url:"<?php echo site_url("Ctrl_bienvenida/guardar");?>",
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


</script>
</body>
</html>