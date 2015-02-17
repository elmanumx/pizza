<?php 
	include'conexion.php';
	$nombre_c_e=$_POST['nombre_c_e'];
	$query=mysql_query("SELECT * FROM cargo_empleado WHERE nombre_cargo_empleado='".$nombre_c_e."'");
	$ejecutar=mysql_fetch_assoc($query);
	if(!$ejecutar)
	{
		$insert=mysql_query("INSERT INTO cargo_empleado (nombre_cargo_empleado,status_cargo_empleado) 
							VALUES('$nombre_c_e','1')");
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
				alert("EL CARGO '.$nombre_c_e.' SE AGREGO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../cargo_empleados.php">
			</head>
		</html>';
		}
	}
	else{
		echo '
			<html>
				<head>
					<script type="text/javascript">
					alert("EL CARGO YA SE ENCUENTRA EN LA BASE DE DATOS")
					javascript:history.back()
					</script>			
				</head>
			</html>';
	}
 ?>
