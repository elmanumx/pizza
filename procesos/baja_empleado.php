<?php 
session_start();
include'conexion.php';
$nombre=$_POST['nombre'];
$id_emp=$_POST['id_emp'];
	$update=mysql_query("UPDATE empleados SET status_empleado='0' where id_empleado='".$id_emp."'"); 
	if(!$update)
	 { 
		mysql_close($conexion);
				echo '
					<html>
						<head>
							<script type="text/javascript">
							alert("error, ocurrio un error")
							javascript:history.back()
							</script>
							
						</head>
					</html>';
	  }
	else
	 	{
	 		$query=mysql_query("SELECT * FROM usuario WHERE id_empleado='".$id_emp."'");
	 		$ejecutar=mysql_fetch_assoc($query);
	 		$id_usuario=$ejecutar['id_usuario'];

	 		$update2=mysql_query("UPDATE usuario SET status_usuario='0' WHERE id_usuario='".$id_usuario."'");
	 		if($update2)
	 		{
				echo '
					<html>
						<head>
							<script>
							alert(" '.$nombre.' se dio de baja correctamente")
							</script>
							<meta http-equiv="REFRESH" content="0; url=../empleados.php">
						</head>
					</html>';	 			

	 		}
	 	}
 ?>
