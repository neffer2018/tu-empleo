<?php
include_once("clasePersona.php");
include_once("interface.php");
include_once("claseUsuario.php");

$a = new users;

$a->SetNombre($_POST['nombre']);
$a->SetApellido($_POST['apellido']);
$a->SetIdentificacion($_POST['identificacion']);
$a->SetCorreo($_POST['correo']);
$a->SetUsuario($_POST['usuario']);
$a->SetContrasena($_POST['contrasena']);

$nombre=$a->GetNombre();
$apellido=$a->GetApellido();
$identificacion=$a->GetIdentificacion();
$correo=$a->GetCorreo();
$usuario=$a->GetUsuario();
$contrasena=$a->GetContrasena();

 $registro = $a->guardar(
 	//parametro que hace la conexion
 	mysqli_connect("localhost","root","","calculadora"),
 	//sentencia que guarda en la base de datos
 	"INSERT INTO contacto(nombre,apellido,identificacion,email,usuario,contrasena)values('$nombre','$apellido','$identificacion','$correo','$usuario','$contrasena')"
 );
 	//validacion de registro de datos
 if($registro==true){header('location:../index.html');}else{echo "error en el registro";}
?>