<?php
#esta clase retorna el campo preegunta de la tabla preguntas en la base de datos
class pregunta{
	public function CPregunta($conexion,$sentencia){
			$con = $conexion;
		if ($con){
			$consulta = $sentencia;
			$resultado = mysqli_query($con,$consulta);
			$row=mysqli_fetch_array($resultado);
		if($row){
			return $row['pregunta'];
			}
		}
	}
}
?>