<?php 
include'conexion.php';
$tamaño_p=$_POST['tamaño_p'];

$consulta="SELECT * FROM tamano WHERE nombre_tamano='".$tamaño_p."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
if(!$r){
	$insert=mysql_query("INSERT INTO tamano (nombre_tamano,status_tamano) 
								VALUES('$tamaño_p','1')");
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
				alert(" El tamaño de Pizza " '.$tamaño_p.' " ha sido hagragado correctamente")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../tamano.php">
			</head>
		</html>';
		}

	}
else{
					echo '
					<html>
						<head>
							<script type="text/javascript">
							alert("error, '.$tamaño_p.' ya se encuentra en la base de datos")
							javascript:history.back()
							</script>
							
						</head>
					</html>';	
				}

 ?>
