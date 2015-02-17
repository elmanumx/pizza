<?php 
include'conexion.php';
$nombre_p=$_POST['nombre_p'];
$url_p=$_POST['url_p'];
$id_p=$_POST['id_p'];
$seccion_p=$_POST['seccion_p'];
$icono=$_POST['icono'];
$editar = "UPDATE pagina SET nombre_pagina='".$nombre_p."',url_pagina='".$url_p."',id_categoria_pagina='".$seccion_p."',icono_pagina='".$icono."' WHERE id_pagina='".$id_p."'";
$sql=mysql_query($editar);
echo '
<html>
	<head>
		<script>
		alert("Modificacion Correcta")
		</script>
		<meta http-equiv="REFRESH" content="0; url=../pages.php">

	</head>
</html>
';

 ?>
