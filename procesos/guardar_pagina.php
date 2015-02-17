<?php 
include'conexion.php';
$nombre_p=$_POST['nombre_p'];
$url_p=$_POST['url_p'];
$seccion_p=$_POST['seccion_p'];
$icono=$_POST['icono'];

$consulta="SELECT * FROM pagina WHERE url_pagina='".$url_p."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
if(!$r){
	$insert=mysql_query("INSERT INTO pagina (nombre_pagina, url_pagina,status_pagina,id_categoria_pagina,icono_pagina) 
								VALUES('$nombre_p','$url_p','1','$seccion_p','$icono')");
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
				alert(" La pagina '.$nombre_p.' ha sido hagragada correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../pages.php">
			</head>
		</html>';
		}

	}
else{
		echo '
	<html>
		<head>
			<script>
			alert("'.$nombre.' ya se encuentra en la base de datos ")
			</script>
			<meta http-equiv="REFRESH" content="0; url=../pages.php">

		</head>
	</html>
	';
	}

 ?>
