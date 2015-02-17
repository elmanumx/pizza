<?php 
include'conexion.php';
$id_mesa=$_POST['id_mesa'];


	$update=mysql_query("UPDATE mesa SET status_mesa='0' WHERE id_mesa='".$id_mesa."'");
	
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
				alert(" La mesa '.$id_mesa.' se dio de baja correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../mesas.php.php">
			</head>
		</html>';
		}
 ?>
