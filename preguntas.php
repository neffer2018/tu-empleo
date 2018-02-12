<?php

include("php/ObjetoPre1.php");
include("php/ObjetoPre2.php");
include("php/ObjetoPre3.php");
include("php/ObjetoPre4.php");
include("php/ObjetoPre5.php");

session_start();
# si no existe una sesion que redireccione a la pagina de inicio
if (empty($_SESSION['id'] && $_SESSION['id'])) {
  header("location:index.html");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximun-scale=1.0, maximun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/validar.js"></script>
</head>

<body>

    <!--  Barra de navegacion   -->

    <div class="container">
      <br>
      <header>
        <nav id="hola" class="navbar navbar-default navbar-fixed-top navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="index.html" class="navbar-brand h4">Proyecto</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-1">
              
              <ul class="nav navbar-nav navbar-right">
      
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    <p class="h4"><?php echo $_SESSION['usu']; ?><span class="caret"></span> </p> 

                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="php/close_sesion.php"><p class="h4">cerrar</p></a></li>
                  </ul>
                </li>
              </ul>

            </div>
          </div>

        </nav>

      </header>
    </div>


<br><br><br>
   <br>

<br>
<div class="row col-md-offset-4 col-md-8 col-xs-6 col-xs-offset-3">
    <p class="h3">Preguntas y datos del cliente</p>
  </div>
  <br><br><br><br>
<div class="row col-md-12">


  <div class="row col-md-5 col-xs-10 col-md-push-3 col-xs-push-1 right">
            <div class="row col-md-8">
              <p class="h4">Datos Usuario</p>
            </div>
      <form action="respuestas.php" method="post">
            <div class="row">
                <div class="col-md-6"> 
                  <label class="h3" for="nombre">Nombre:</label>
                  <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                  <small id="men_nom" class="form-text text-muted offset-2"></small>
                </div>
                <div class="col-md-6">
                  <label class="h3" for="apellido">Apellido:</label>
                  <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellido">
                  <small id="men_ape" class="form-text text-muted offset-2"></small>
                </div>
            </div>
            <div class="form-group">
              <label class="h3" for="email">E-Mail:</label>
              <input type="text" id="email" name="email" class="form-control" placeholder="Email">
              <small id="men_email" class="form-text text-muted offset-2"></small>
            </div>
      
          <br>
       </form>
  </div>
</div>


  <div class="row col-md-5 col-xs-10 col-xs-offset-1 col-md-offset-3 ">
    <div class="row col">
        <p class="h4">Datos Usuario</p>
    </div>

<form action="respuestas.php" method="post">
      <p class="h3">1) <?php echo utf8_encode($pregunta1);?></p>
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary ">
          <input type="radio" name="opcion1" id="res1" value="1" autocomplete="off">Si
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="opcion1" id="res2" value="2" autocomplete="off">No
        </label>
      </div>

      <p class="h3">2) <?php echo utf8_encode($pregunta2);?></p>
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary ">
          <input type="radio" name="opcion2" id="res3" value="3" autocomplete="off"> Si
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="opcion2" id="res4" value="4" autocomplete="off"> No
        </label>
      </div>
      

      <p class="h3">3) <?php echo utf8_encode($pregunta3);?></p>
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary ">
          <input type="radio" name="opcion3" id="res5" value="5" autocomplete="off"> Si
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="opcion3" id="res6" value="6" autocomplete="off"> No
        </label>
      </div>

      <p class="h3">4) <?php echo utf8_encode($pregunta4);?></p>
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary ">
          <input type="radio" name="opcion4" id="res7" value="7" autocomplete="off"> Si
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="opcion4" id="res8" value="8" autocomplete="off"> No
        </label>
      </div>

      <p class="h3">5) <?php echo utf8_encode($pregunta5);?></p>
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary ">
          <input type="radio" name="opcion5" id="res9" value="9" autocomplete="off"> Si
        </label>
        <label class="btn btn-primary">
          <input type="radio" name="opcion5" id="res10" value="10" autocomplete="off"> No
        </label>
      </div>
      <div class="row col-md-offset-5 col-xs-offset-4">
          <button class="btn btn-lg btn-primary" type="submit" onclick="return validar_campo_preguntas();">enviar</button>
      </div>
    </form>
  </div>


  <br><br>


<script type="text/javascript" src="js/validar.js"></script>
<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

