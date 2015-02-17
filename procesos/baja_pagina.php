<?php 
include'conexion.php';
$id_p=$_POST['id_p'];
$editar = "UPDATE pagina SET status_pagina='0' WHERE id_pagina='".$id_p."'";
$sql=mysql_query($editar);
echo '
<html>
	<head>
		<script>
		alert("La pagina '.$nombre_p.' se dio de baja carrectamente ")
		</script>
		<meta http-equiv="REFRESH" content="0; url=../pages.php">

	</head>
</html>
';

 ?>
