<?php 
session_start();
include'conexion.php';
$nombre_emp=$_POST['nombre_emp'];
$app_emp=$_POST['app_emp'];
$apm_emp=$_POST['apm_emp'];
$fecha_nac=$_POST['fecha_nac'];
$direccion_emp=$_POST['direccion_emp'];
$rfc_emp=$_POST['rfc_emp'];
$telefono_emp=$_POST['telefono_emp'];
$cargo_emp=$_POST['cargo_emp'];
$id_emp=$_POST['id_emp'];
	$update=mysql_query("UPDATE empleados SET nombre_empleado='".$nombre_emp."',apellidop_empleado='".$app_emp."',apellidom_empleado='".$apm_emp."',direccion_empleado='".$direccion_emp."',rfc_empleado='".$rfc_emp."',tel_empleado='".$telefono_emp."',id_cargo_empleado='".$cargo_emp."',fecha_nac_empleado='".$fecha_nac."' where id_empleado='".$id_emp."'"); 
	$id_emp=mysql_insert_id();
	if(!$update)
	 { 
		mysql_close($conexion);
				echo '
					<html>
						<head>
							<script type="text/javascript">
							alert("error, ocurrio un error con la base de datos")
							javascript:history.back()
							</script>
							
						</head>
					</html>';
	  }
	else
	 	{
				echo '
					<html>
						<head>
							<script>
							alert(" '.$nombre_emp.' '.$app_emp.' '.$apm_emp.' ha sido ha modificado correctamente")
							</script>
							<meta http-equiv="REFRESH" content="0; url=../empleados.php">
						</head>
					</html>';	 			
	 		}
 ?>
