<?php
#metodo que guarda en la base de datos y es usado en la clase users
interface BD{
	public function guardar($conexion,$sentencia);
}

?>