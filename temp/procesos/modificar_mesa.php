<?php 
include'conexion.php';
$numero_mesa=$_POST['numero_mesa'];
$desc_mesa=$_POST['desc_mesa'];
$id_mesa=$_POST['id_mesa'];
$numero_actual=$_POST['numero_actual'];

if($numero_actual!=$numero_mesa){
$consulta="SELECT * FROM mesa WHERE numero_mesa='".$numero_mesa."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
}
else{
	$r=false;
}

if(!$r){

	$update=mysql_query("UPDATE mesa SET numero_mesa='".$numero_mesa."', descripcion_mesa='".$desc_mesa."' WHERE id_mesa='".$id_mesa."'");
	
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
				alert(" La mesa '.$numero_mesa.' ha sido modificada correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../formulario_modificar_mesa.php">
			</head>
		</html>';
		}

	}
	else{
		echo '
	<html>
	<head>
					<script type="text/javascript">
					alert("No se puede modificar porque la mesa '.$numero_mesa.'\nya se encuentra en la base de datos ");
					javascript:history.back()
					</script>			
				</head>
	</html>
	';
	}

 ?>
