<?php 
	include'conexion.php';
	$nombre_pro=$_POST['nombre_pro'];
	$descripcion_pro=$_POST['descripcion_pro'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	$existencia_act=$_POST['existencia_act'];
	$existencia_min=$_POST['existencia_min'];

	$query=mysql_query("SELECT * FROM producto WHERE nombre_producto='".$nombre_pro."'");
	$ejecutar=mysql_fetch_assoc($query);
	if(!$ejecutar)
	{
		$extension=explode(".",$_FILES['img_pro']['name']); 
		$extension=$extension[count($extension)-1]; 
		$img_producto=rand().$nombre_pro.".".$extension;
		$insert=mysql_query("INSERT INTO producto (nombre_producto,descripcion_producto,precio_compra_producto,precio_venta_producto,existencia_actual_producto,existencia_min_producto,img_producto,status_producto) 
							VALUES('$nombre_pro','$descripcion_pro','$precio_compra','$precio_venta','$existencia_act','$existencia_min','$img_producto','1')");
		if(!$insert)
		{ 
			$x=mysql_error();
			die("Ocurrio un error en la base de datos: $x"); 
			mysql_close($conexion);
	  	}
	  	else
	  	{
	  		$directorio ='../img/producto/';
        	move_uploaded_file($_FILES['img_pro']['tmp_name'],$directorio.$img_producto);
			echo '
		<html>
			<head>
				<script>
				alert("EL PRODUCTO '.$nombre_pro.' SE AGREGO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../productos.php">
			</head>
		</html>';
		}
	}
	else{
		echo '
			<html>
				<head>
					<script type="text/javascript">
					alert("EL PRODUCTO YA SE ENCUENTRA EN LA BASE DE DATOS")
					javascript:history.back()
					</script>			
				</head>
			</html>';
	}
 ?>
