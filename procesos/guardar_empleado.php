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
$acceso_emp=$_POST['acceso_emp'];

$consulta="SELECT * FROM empleados WHERE nombre_empleado='".$nombre_emp."' and apellidop_empleado='".$app_emp."' and apellidom_empleado='".$apm_emp."'";
$resultado = mysql_query($consulta);
$r=mysql_fetch_assoc($resultado);
if(!$r){
	$insert=mysql_query("INSERT INTO empleados (nombre_empleado,apellidop_empleado,apellidom_empleado,direccion_empleado,rfc_empleado,tel_empleado,id_cargo_empleado,fecha_nac_empleado,status_empleado) 
								VALUES('$nombre_emp','$app_emp','$apm_emp','$direccion_emp','$rfc_emp','$telefono_emp','$cargo_emp','$fecha_nac','1')");
	$id_emp=mysql_insert_id();
	
	if(isset($_POST['grupo_venta'])){
		$grupo_venta=$_POST['grupo_venta'];
		foreach ($grupo_venta as $check)
		    {
				$id_pagina=$check;
				$insertar=mysql_query("INSERT INTO privilegio (id_pagina,id_empleado,status_privilegio) 
												VALUES('$id_pagina','$id_emp','1')");
				if(!$insertar)
				{ 
				$x=mysql_error();
				die("un error en la base de datos:".$x); 		
				}
		     } 
	 }
	

	if(!$insert)
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
	 		if($acceso_emp=="si"){
	 			$_SESSION['id_empleado']=$id_emp;
	 			echo '
					<html>
						<head>
							<script>
							alert(" '.$nombre_emp.' '.$app_emp.' '.$apm_emp.' ha sido agragado(a) correctamente")
							</script>
							<meta http-equiv="REFRESH" content="0; url=../new_user.php">
						</head>
					</html>';
	 		}
	 		else{
				echo '
					<html>
						<head>
							<script>
							alert(" '.$nombre_emp.' '.$app_emp.' '.$apm_emp.' ha sido hagragado(a) correctamente")
							</script>
							<meta http-equiv="REFRESH" content="0; url=../empleados.php">
						</head>
					</html>';	 			
	 		}

		}

	}
	else{
				echo '
					<html>
						<head>
							<script type="text/javascript">
							alert("error, este usuarios ya se encuentra en la base de datos")
							javascript:history.back()
							</script>
							
						</head>
					</html>';	 			


	}
 ?>
