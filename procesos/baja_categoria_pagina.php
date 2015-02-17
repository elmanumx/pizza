<?php 
	include'conexion.php';
	$nombre_c=$_POST['nombre_c'];
	$id_categoria=$_POST['id_categoria'];
	$update=mysql_query("UPDATE categoria_pagina SET status_categoria_pagina='0' where id_categoria_pagina='".$id_categoria."'");
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
				alert(" La categoria '.$nombre_c.' se dio de baja correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../categorias_pages.php">
			</head>
		</html>';
		}
 ?>
