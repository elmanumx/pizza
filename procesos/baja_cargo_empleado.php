<?php 
	include'conexion.php';
	$id_cargo_empleado=$_POST['id_cargo_empleado'];
	$nombre_c_e=$_POST['nombre_c_e'];

	
		$update=mysql_query("UPDATE cargo_empleado SET status_cargo_empleado='0' where id_cargo_empleado='".$id_cargo_empleado."'");
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
				alert("EL CARGO '.$nombre_c_e.' SE DIO DE BAJA CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../cargo_empleados.php">
			</head>
		</html>';
		}
	 ?>
