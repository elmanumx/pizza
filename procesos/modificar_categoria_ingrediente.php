<?php 
include'conexion.php';
$nombre_c=$_POST['nombre_c_i'];
$id_categoria_ingrediente=$_POST['id_categoria_ingrediente'];
$update=mysql_query("UPDATE  categoria_ingrediente  SET nombre_categoria_ingrediente='".$nombre_c."' WHERE id_categoria_ingrediente='".$id_categoria_ingrediente."'");
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
				alert(" La categoria '.$nombre_c.' ha sido modificada correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../categoria_ingredientes.php">
			</head>
		</html>';
		}
 ?>
