<?php 
include'conexion.php';
$nombre_c=$_POST['nombre_c_i'];
$consulta="SELECT * FROM categoria_ingrediente WHERE nombre_categoria_ingrediente='".$nombre_c."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
if(!$r){
	$insert=mysql_query("INSERT INTO categoria_ingrediente (nombre_categoria_ingrediente,status_categoria_ingrediente) 
								VALUES('$nombre_c','1')");
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
				alert(" La categoria '.$nombre_c.' ha sido agragada correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../categoria_ingredientes.php">
			</head>
		</html>';
		}

	}
else{
		echo '
	<html>
		<head>
			<script>
			alert("'.$nombre_c.' ya se encuentra en la base de datos ")
			</script>
			<meta http-equiv="REFRESH" content="0; url=../categoria_ingredientes.php">

		</head>
	</html>
	';
	}

 ?>
