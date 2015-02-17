<?php 
include'conexion.php';
$numero_mesa=$_POST['numero_mesa'];
$desc_mesa=$_POST['desc_mesa'];

$consulta="SELECT * FROM mesa WHERE numero_mesa='".$numero_mesa."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
if(!$r){
	$insert=mysql_query("INSERT INTO mesa (numero_mesa, descripcion_mesa,status_mesa,temporal_mesa) 
								VALUES('$numero_mesa','$desc_mesa','1','disponible')");
	if(!$insert)
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
				alert(" La mesa '.$numero_mesa.' ha sido hagragada correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../mesas.php">
			</head>
		</html>';
		}

	}
else{
		echo '
	<html>
		<head>
			<script>
			alert("'.$nombre.' ya se encuentra en la base de datos ")
			</script>
			<meta http-equiv="REFRESH" content="0; url=../mesas.php">

		</head>
	</html>
	';
	}

 ?>
