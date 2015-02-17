<?php 
include'conexion.php';
$nombre_c=$_POST['nombre'];
$id_categoria_ingrediente=$_POST['id_categoria_ingrediente'];
$update=mysql_query("UPDATE  categoria_ingrediente  SET status_categoria_ingrediente='0' WHERE id_categoria_ingrediente='".$id_categoria_ingrediente."'");
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
				alert(" La categoria '.$nombre_c.' se ha eliminado correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../categoria_ingredientes.php">
			</head>
		</html>';
		}
 ?>
