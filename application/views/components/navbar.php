
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <script src="<?php echo base_url();?>/js/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<style>
  nav{
    display: flex;
    justify-content: space-between;
    padding: 0 24px ;
    border-bottom: 1px solid black;
    background-color: #E6D7BD;
}
.menu{
    display: none;
}
.logo{
    height: 65px;
    width: 100%;    
}
.navbar-left ul,
.navbar-right ul {
    list-style: none;
    padding: 2px;
    margin: 0;
    display: flex;
    align-items: center;
    height:65px;
}
.navbar-left{
    display: flex;

}
.navbar-left ul{

    margin-left: 12px;
}
.navbar-left ul li a,
.navbar-right ul li a {
    text-decoration: none;
    color: #382C1E;
    border: 1px solid #E6D7BD;
    padding: 8px;
    margin-left: 12px;
    border-radius: 8px;
}
.navbar-left ul li a:hover,
.navbar-right ul li a:hover {
    color:#382C1E;
    border: 1px solid #382C1E;
}
.boton-login{
    color: #E6D7BD ;
    border: 1px solid #382C1E;
}
.boton-login:hover{
    color: #382C1E ;
    border: 1px solid #382C1E;
    background-color: white;
}
</style>


<body>
<nav> 
  <div class="navbar-left">
    <a href="<?php echo site_url("Ctrl_bienvenida/index");?>">
        <img src="/application/views/components/img/Parroquia.png" alt="logo" class ="logo">
    </a>
  </div>
  <div class="navbar-right">
    <ul>
        <li>
            <a href="<?php echo site_url("Ctrl_curso/index");?>">Curso</a>
        </li>
        <li>
            <a href="<?php echo site_url("Ctrl_evento/index");?>">Evento</a>
        </li>
        <li>
            <a class ="boton-login" href="<?php echo site_url("Ctrl_bienvenida/index");?>">Iniciar Sesión</a>
        </li>

    </ul>
  </div>
</nav> 





