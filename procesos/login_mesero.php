<?php 
session_start();
include'conexion.php';
$q=$_POST['q'];
	$query2=mysql_query("SELECT cargo_empleado.*, empleados.id_empleado FROM cargo_empleado,empleados WHERE empleados.id_cargo_empleado= cargo_empleado.id_cargo_empleado and empleados.id_empleado = '".$q."' and cargo_empleado.status_cargo_empleado='1'");
	$resul2=mysql_fetch_assoc($query2);
	if(!$resul2){
		echo 'no';
	}
	else {
		$_SESSION['puesto'] =$resul2['nombre_cargo_empleado'];
		$_SESSION['cve_mesero']=$resul2['id_empleado'];
		echo 'si';
	}

 ?>
