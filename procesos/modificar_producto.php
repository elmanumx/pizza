<?php 
	include'conexion.php';
	$id_producto=$_POST['id_producto'];
	$nombre_pro=$_POST['nombre_pro'];
	$descripcion_pro=$_POST['descripcion_pro'];
	$precio_compra=$_POST['precio_compra'];
	$precio_venta=$_POST['precio_venta'];
	$existencia_act=$_POST['existencia_act'];
	$existencia_min=$_POST['existencia_min'];
	$img_producto=$_POST['img_producto'];

	
	$update=mysql_query("UPDATE producto SET nombre_producto='".$nombre_pro."',descripcion_producto='".$descripcion_pro."',
		precio_compra_producto='".$precio_compra."',precio_venta_producto='".$precio_venta."',existencia_actual_producto='".$existencia_act."',
		existencia_min_producto='".$existencia_min."' WHERE id_producto='".$id_producto."'");
	if(!$update)
	{ 
		$x=mysql_error();
		die("Ocurrio un error en la base de datos: $x"); 
		mysql_close();
	}
	else
	{
		if($_FILES['img_pro']['name']!=""){
			unlink("../img/producto/".$img_producto."");
			$directorio ='../img/producto/';
      		move_uploaded_file($_FILES['img_pro']['tmp_name'],$directorio.$img_producto);
		}
	echo '
		<html>
			<head>
				<script>
				alert("EL PRODUCTO '.$nombre_pro.' SE MODIFICO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../productos.php">
			</head>
		</html>';
	}
?>
