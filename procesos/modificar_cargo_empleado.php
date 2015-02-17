<?php 
	include'conexion.php';
	$nombre_c_e=$_POST['nombre_c_e'];
	$id_cargo_empleado=$_POST['id_cargo_empleado'];

	
		$update=mysql_query("UPDATE cargo_empleado SET nombre_cargo_empleado='".$nombre_c_e."' where id_cargo_empleado='".$id_cargo_empleado."'");
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
				alert("EL CARGO '.$nombre_c_e.' SE MODIFICO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../cargo_empleados.php">
			</head>
		</html>';
		}
	 ?>
