<?php 
session_start();
#destruira la sesion iniciada y redireccionara a la pagina de inicio
session_destroy();
header("location:../index.html");

?>