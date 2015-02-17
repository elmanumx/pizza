<?php 
include'conexion.php';
$nombre_c=$_POST['nombre_c'];
$icono=$_POST['icono'];
$consulta="SELECT * FROM categoria_pagina WHERE nombre_categoria_pagina='".$nombre_c."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
if(!$r){
	$insert=mysql_query("INSERT INTO categoria_pagina (nombre_categoria_pagina,status_categoria_pagina,icono_categoria_pagina) 
								VALUES('$nombre_c','1','$icono')");
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
				alert(" La categoria '.$nombre_c.' ha sido ha gragada correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../categorias_pages.php">
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
			<meta http-equiv="REFRESH" content="0; url=../categorias_pages.php">

		</head>
	</html>
	';
	}

 ?>
