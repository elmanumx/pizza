<?php 
	include'conexion.php';
	$nombre_i=$_POST['nombre_i'];
	$medida_i=$_POST['medida_i'];
	$categoria_i=$_POST['categoria_i'];
	$cantidad_actual_i=$_POST['cantidad_actual_i'];
	$cantidad_minima_i=$_POST['cantidad_minima_i'];
	$id_ingrediente=$_POST['id_ingrediente'];

	
		$update=mysql_query("UPDATE  ingrediente  SET nombre_ingrediente='".$nombre_i."',id_medida_ingrediente='".$medida_i."',id_categoria_ingrediente='".$categoria_i."',cantidad_actual_ingrediente='".$cantidad_actual_i."',cantidad_minima_ingrediente='".$cantidad_minima_i."' 
							where id_ingrediente='".$id_ingrediente."'"); 
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
				alert("EL INGREDIENTE '.$nombre_i.' SE MODIFICO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../ingredientes.php">
			</head>
		</html>';
		}
 ?>
