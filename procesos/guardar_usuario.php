<?php 
	include'conexion.php';
	$nombre_usuario=$_POST['nombre_us'];
	$pass_usuario=$_POST['pass'];
	$id_empleado=$_POST['id_emp'];

	if(isset($_POST['Guardar']))
	{
		$insert=mysql_query("INSERT INTO usuario (nombre_usuario, pass_usuario,status_usuario,id_empleado) 
								VALUES('$nombre_usuario','$pass_usuario','1','$id_empleado')");
		if(!$insert)
		{ 
			$x=mysql_error();
			die("Ocurrio un error la base de datos: $x"); 
			mysql_close($conexion);
	  	}
	  	else
	  	{
	  			$id_usuario=mysql_insert_id();
	  	}

	}

	if(isset($_POST['Modificar']))
	{
		
		$id_usuario=$_POST['id_usuario'];
		if($_POST['Modificar']=="Modificar")
		{
			$delete=mysql_query("DELETE FROM privilegio where id_usuario='".$id_usuario."'");

			$editar = "UPDATE usuario SET nombre_usuario='".$nombre_usuario."', pass_usuario ='".$pass_usuario."'  WHERE id_usuario='".$id_usuario."'";
			$sql=mysql_query($editar);
			if(!$sql)
			{ 
				$x=mysql_error();
				die("Ocurrio un error en la base de datos:".$x); 
				mysql_close();
			}
		}
	}

	if(isset($_POST['lista_ac']))
	{
			$lista_ac=$_POST['lista_ac'];
	    	
	   foreach ($lista_ac as $check)
	    {
	    	$guardar=0;
	    	$modificar=0;
	    	$baja=0;
	    	$id_pagina=$check;
	    	$name='arreglo'.$check;
	    	if(isset($_POST[$name])){
	    	$arreglo=$_POST[$name];
	    	foreach ($arreglo as $c){
	    		
	    	if($c=="guardar"){
	    		$guardar=1;
	    	}
	    	if($c=="modificar"){
	    		$modificar=1;
	    	}
	    	if($c=="baja"){
	    		$baja=1;
	    	}
	    	}
	    }

			$insertar=mysql_query("INSERT INTO privilegio (id_pagina,id_usuario,status_privilegio,guardar_privilegio,modificar_privilegio,baja_privilegio) 
											VALUES('$id_pagina','$id_usuario','1','$guardar','$modificar','$baja')");
			if(!$insertar)
			{ 
			$x=mysql_error();
			die("un error en la base de datos:".$x); 		
			}
	     } 
 	}
 	if(isset($_POST['Guardar']))
 	{
		echo '
		<html>
			<head>
				<script>
				alert("EL USUARIO '.$nombre_usuario.' SE AGREGO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../empleados.php">
			</head>
		</html>';

 	}
 	else
 	{
 				echo '
		<html>
			<head>
				<script>
				alert("EL USUARIO '.$nombre_usuario.' SE MODIFICO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../usuarios.php">
			</head>
		</html>';

 	}

	 
 ?>
