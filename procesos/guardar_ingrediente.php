<?php 
	include'conexion.php';
	$nombre_i=$_POST['nombre_i'];
	$medida_i=$_POST['medida_i'];
	$categoria_i=$_POST['categoria_i'];
	$cantidad_actual_i=$_POST['cantidad_actual_i'];
	$cantidad_minima_i=$_POST['cantidad_minima_i'];

	$query=mysql_query("SELECT * FROM ingrediente WHERE nombre_ingrediente='".$nombre_i."'");
	$ejecutar=mysql_fetch_assoc($query);
	if(!$ejecutar)
	{
		$insert=mysql_query("INSERT INTO ingrediente (nombre_ingrediente,id_medida_ingrediente,id_categoria_ingrediente,cantidad_actual_ingrediente,cantidad_minima_ingrediente) 
							VALUES('$nombre_i','$medida_i','$categoria_i','$cantidad_actual_i','$cantidad_minima_i')");
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
				alert("EL INGREDIENTE '.$nombre_i.' SE AGREGO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../ingredientes.php">
			</head>
		</html>';
		}
	}
	else{
		echo '
			<html>
				<head>
					<script type="text/javascript">
					alert("EL INGREDIENTE YA SE ENCUENTRA EN LA BASE DE DATOS")
					javascript:history.back()
					</script>			
				</head>
			</html>';
	}
 ?>
