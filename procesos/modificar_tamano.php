<?php 
include'conexion.php';
$id_tamano=$_POST['id_tamano'];
$tamano_p=$_POST['tamaño_p'];

	$update=mysql_query("UPDATE tamano  SET nombre_tamano='".$tamano_p."' where id_tamano='".$id_tamano."'");
	if(!$update)
	 { 
		$x=mysql_error();
		die("Ocurrio un error en la base de datos: $x"); 
		mysql_close($conexion);
	  }
	else
	 	{
		echo '
		<html>
			<head>
				<script>
				alert(" El tamaño '.$tamano_p.' se modifico correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../tamano.php">
			</head>
		</html>';
		}
 ?>
