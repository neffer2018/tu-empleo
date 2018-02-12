<?php 
class valor{
	public function suma($conexion,$sentencia){
		$conec = $conexion;
		if($conec){
			$consulta = $sentencia;
			$resultado = mysqli_query($conec,$consulta);
			return $resultado;
			 
	}

	}
}


?>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">