<?php 
	include'conexion.php';
	$nombre_usuario=$_POST['nombre_us'];
	$id_usuario=$_POST['id_usuario'];
	$editar =mysql_query( "UPDATE usuario SET status_usuario='0' WHERE id_usuario='".$id_usuario."'");
	if(!$editar)
	{ 
		$x=mysql_error();
		die("Ocurrio un error:".$x); 
		mysql_close();
	}
	else
	{
		echo '
		<html>
			<head>
				<script>
				alert("EL USUARIO '.$nombre_usuario.' SE DIO DE BAJA CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../formulario_baja_usuario.php">
			</head>
		</html>';
	}	

 ?>
