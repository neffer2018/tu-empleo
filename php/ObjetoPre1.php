<?php
header("Content-Type: text/html; charset=utf-8");
include_once("php/ClasePregunta.php");
#aqui se instancia la clase pregunta donde los parametros reciben la conexion a la base de datos y la sentencia a ejecutar
$a = new pregunta;
$pregunta1 = $a->CPregunta(mysqli_connect("localhost","root","","calculadora"),"SELECT id_pre,pregunta FROM preguntas Where id_pre='1'");
?>