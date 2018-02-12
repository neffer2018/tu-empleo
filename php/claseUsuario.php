<?php
#incluye clase persona
include_once("clasePersona.php");
#incluye interfaces donde esta el metodo guardar
include_once("interface.php");
#esta clase extiende de la clase abstracta persona y es usada para el registro del administrador
class users extends persona{
	private $usuario;
	private $contrasena;
#funcion que retorna el atributo nombre de la clase persona
	public function GetNombre(){
		return $this->nombre;
	}
#funcion que tiene un parametro que recibira el POST
	public function SetNombre($nombre){
		$this->nombre = $nombre;
	}
#funcion que tiene un parametro que recibira el POST
	public function SetApellido($apellido){
		$this->apellido = $apellido;
	}
#funcion que retorna el atributo apellido de la clase persona
	public function GetApellido(){
		return $this->apellido;
	}
	public function SetIdentificacion($identificacion){
		$this->identificacion = $identificacion;
	}
#funcion que retorna el atributo identificacion de la clase persona
	public function GetIdentificacion(){
		return $this->identificacion;
	}
#funcion que retorna el atributo correo de la clase persona
	public function GetCorreo(){
		return $this->correo;
	}
#funcion que tiene un parametro que recibira el POST
	public function SetCorreo($correo){
		$this->correo = $correo;
	}
#funcion que retorna el atributo usuario de la clase persona
	public function GetUsuario(){
		return $this->usuario;
	}

#funcion que tiene un parametro que recibira el POST
	public function SetUsuario($usuario){
		$this->usuario = $usuario;
	}
#funcion que retorna el atributo contrasena de la clase persona
	public function GetContrasena(){
		return $this->contrasena;
	}

#funcion que tiene un parametro que recibira el POST
	public function SetContrasena($contrasena){
		$this->contrasena = $contrasena;
	}
#funcion que se va usar para el registro del administrador
	public function guardar($conexion,$sentencia){
	$con = $conexion;
	 if($con){
		$consulta = $sentencia;
		$resultado = mysqli_query($con,$consulta);
		if ($resultado) {
			return true;
			}
    	}
	}
}
?>