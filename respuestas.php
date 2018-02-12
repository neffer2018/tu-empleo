<?php
include_once("php/valores.php");

session_start();

if (empty($_SESSION['id'] && $_SESSION['id'])) {
  header("location:index.html");
}



ob_start();
$res1 = $_POST['opcion1'];
$res2 = $_POST['opcion2'];
$res3 = $_POST['opcion3'];
$res4 = $_POST['opcion4'];
$res5 = $_POST['opcion5'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];


$objConex = new valor();
$con = mysqli_connect("localhost","root","","calculadora");

$consulta = "SELECT id_contacto,nombre,apellido from contacto ";
$respN = $objConex->suma($con,$consulta);
$resNombres = $respN->fetch_array();


$insertResp = "INSERT INTO tabla(id_pre,id_res) VALUES (1,$res1),(2,$res2),(3,$res3),(4,$res4),(5,$res5)";
$RinsertResp = $objConex->suma($con,$insertResp);


$CResp1 = "SELECT preguntas.pregunta as preg,respuestas.respuesta as res,respuestas.valor as valor
				FROM preguntas,respuestas,contacto
				WHERE respuestas.id_pre = preguntas.id_pre AND respuestas.id_res = $res1";
 
$resp1= $objConex->suma($con,$CResp1);
$RCResp1 = $resp1->fetch_array();

$CResp2 = "SELECT preguntas.pregunta as preg,respuestas.respuesta as res,respuestas.valor as valor
				FROM preguntas,respuestas,contacto
				WHERE respuestas.id_pre = preguntas.id_pre AND respuestas.id_res = $res2";
 
$resp2= $objConex->suma($con,$CResp2);
$RCResp2 = $resp2->fetch_array();

$CResp3 = "SELECT preguntas.pregunta as preg,respuestas.respuesta as res,respuestas.valor as valor
				FROM preguntas,respuestas,contacto
				WHERE respuestas.id_pre = preguntas.id_pre AND respuestas.id_res = $res3";
 
$resp3= $objConex->suma($con,$CResp3);
$RCResp3 = $resp3->fetch_array();

$CResp4 = "SELECT preguntas.pregunta as preg,respuestas.respuesta as res,respuestas.valor as valor
				FROM preguntas,respuestas,contacto
				WHERE respuestas.id_pre = preguntas.id_pre AND respuestas.id_res = $res4";
 
$resp4= $objConex->suma($con,$CResp4);
$RCResp4 = $resp4->fetch_array();

$CResp5 = "SELECT preguntas.pregunta as preg,respuestas.respuesta as res,respuestas.valor as valor
				FROM preguntas,respuestas,contacto
				WHERE respuestas.id_pre = preguntas.id_pre AND respuestas.id_res = $res5";
 
$resp5= $objConex->suma($con,$CResp5);
$RCResp5 = $resp5->fetch_array();

$Total = "SELECT SUM(respuestas.valor) as Tvalor
				FROM preguntas,respuestas,tabla
				WHERE respuestas.id_pre = preguntas.id_pre 
				AND tabla.id_pre = preguntas.id_pre
				AND tabla.id_res = respuestas.id_res";
				
$respT = $objConex->suma($con,$Total);
$RTotal = $respT->fetch_array();

?>
  	<div class="container">

  		<h3>Cotizacion</h3>

    	<table class="table table-striped table-bordered">
    		<tr>
    			<td>Programador:</td>	
    			<td><?php echo $resNombres['nombre']." ".$resNombres['apellido']."" ?></td>
    		</tr>

			<tr>
				<td><br></td>
			</tr>

			<tr>
				<td>Pregunta 1</td>
				<td>Pregunta 2</td>
				<td>Pregunta 3</td>
				<td>Pregunta 4</td>
				<td>Pregunta 5</td>
			</tr>

			<tr class="">
				<td><?php echo $RCResp1['preg'] ?></td>
				<td><?php echo $RCResp2['preg'] ?></td>
				<td><?php echo $RCResp3['preg'] ?></td>
				<td><?php echo $RCResp4['preg'] ?></td>
				<td><?php echo $RCResp5['preg'] ?></td>
	    	</tr>
	    	<tr>
	    		<td><br></td>
	    	</tr>

	    	<tr>
	    		<td>respuesta: <?php echo $RCResp1['res'] ?></td>
				<td>respuesta: <?php echo $RCResp2['res'] ?></td>
				<td>respuesta: <?php echo $RCResp3['res'] ?></td>
				<td>respuesta: <?php echo $RCResp4['res'] ?></td>
				<td>respuesta: <?php echo $RCResp5['res'] ?></td>
				
	    	</tr>
	    	<tr>
	    		<td><br></td>
	    	</tr>
	    	<tr>
	    		<td>Usuario:</td>
	    		<td><?php echo $nombre." ".$apellido ?></td>
	    		<td></td>
	    		<td>Total a Pagar</td>
	    		<td><?php echo $RTotal['Tvalor']; ?></td>
	    	</tr>
	    	
 		</table>
    </div>
    
<?php 
	require_once("php/dompdf/dompdf_config.inc.php");
	$dompdf = new DOMPDF();
	$dompdf->load_html(ob_get_clean());
	$dompdf->render();
	$pdf = $dompdf->output();
	$filename = "Cotizacion.pdf";
	$dompdf->stream($filename, array("Attachment" => 0));

	$Borrar = "TRUNCATE TABLE tabla";
	$RBorrar = $objConex->suma($con,$Borrar);

	$insertar = "INSERT INTO usuario(nombre,apellido,email,id_contacto) VALUES ('$nombre','$apellido','$email','$_SESSION[id]')";
	$Rinsertar = $objConex->suma($con,$insertar);
 ?>

