<?php
include_once("login.php");
#se instancia la clase sesion
$a = new sesion;
#obtine el name del campo usuario en la pagina sesion
$a->SetUsuario($_POST['usuario']);
#obtine el name del campo contrasena en la pagina sesion
$b=$a->SetContrasena($_POST['contrasena']);

#obtiene el valor usuario que sera usado para loguearse
$usuario=$a->GetUsuario();
#obtiene el valor contrasena que sera usado para loguearse
$contrasena=$a->GetContrasena();

#parametro que hace la conexion
$con = mysqli_connect("localhost","root","","calculadora");
#sentencia que ha la consulta a la base de datos
$consulta = "SELECT id_contacto,usuario,contrasena FROM contacto WHERE usuario='$usuario' AND contrasena='$contrasena'";

$login = $a->login($con,$consulta);
$rLogin = $login->fetch_array();

//validacion de consulta de datos
if ($rLogin){session_start(); $_SESSION['id']=$rLogin['id_contacto'];$_SESSION['usu']=$rLogin['usuario']; header("location:../preguntas.php");  }else{echo "usuario o contrasena invalidos";}
?>