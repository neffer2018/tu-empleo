<?php
#clase sesion con atributos usuario y contrasena 
class sesion {
	private $usuario;
	private $contrasena;
#funcion que retorna el atributo usuario 
	public function GetUsuario(){
		return $this->usuario;
	}
#funcion que tiene un parametro que recibira el POST
	public function SetUsuario($usuario){
		$this->usuario = $usuario;
	}
#funcion que retorna el atributo apellido 
	public function GetContrasena(){
		return $this->contrasena;
	}
#funcion que tiene un parametro que recibira el POST
	public function SetContrasena($contrasena){
		$this->contrasena = $contrasena;
	}
#funcion del login para el administrador
	public function login($conexion,$sentencia){
		$conec = $conexion;
		if($conec){
			$consulta = $sentencia;
			$resultado = mysqli_query($conec,$consulta);
			return $resultado;
		}
	}
}
?>