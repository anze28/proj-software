
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

<style>
  nav{
    display: flex;
    justify-content: space-between;
    padding: 0 24px ;
    border-bottom: 1px solid var(--very-light-pink);
    background-color: var(--gris);
}
.menu{
    display: none;
}
.logo{
    height: 50px;
    width: 100%;
    margin-top: 5px;
    
}
.navbar-left ul,
.navbar-right ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    align-items: center;
    height:60px;
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
    color: var(--black);
    border: 0px solid var(--black);
    padding: 8px;
    border-radius: 8px;
}
.navbar-left ul li a:hover,
.navbar-right ul li a:hover {
    color: var(--red);
    border: 1px solid var(--red);
}
</style>


<body>
<nav> 
  <div class="navbar-left">
    <a href="<?php echo site_url("Ctrl_bienvenida/index");?>">
        <img src="<?php echo site_url("../img/Parroquia.png");?>" alt="logo" class ="logo">
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

    </ul>
  </div>
</nav> 





