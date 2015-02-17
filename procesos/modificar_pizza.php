<?php 
include'conexion.php';
$id_pizza=$_POST['id_pizza'];
$nombre_pizza=$_POST['nombre_pizza'];
$desc_pizza=$_POST['desc_pizza'];
$var=$_FILES['imagen_pizza']['name'];
$picture=$_POST['picture'];
if($var!="") {
    $img_pizza=rand().$nombre_pizza.$var;
	$query=mysql_query("UPDATE pizza SET nombre_pizza='".$nombre_pizza."',descripcion_pizza='".$desc_pizza."',img_pizza='".$img_pizza."' WHERE id_pizza='".$id_pizza."'");
	if(!$query){
		echo '
			<html>
				<head>
					<script>
					alert("error, comuniquese con su proveedor")
					window.history.back();
					</script>
					</head>
			</html>';		
		exit();
	}
	else{
		$directorio ='../img/pizza/';
		unlink($directorio.$picture);
        move_uploaded_file($_FILES['imagen_pizza']['tmp_name'],$directorio.$img_pizza);

        	echo '
		<html>
			<head>
				<script>
				alert("LA PIZZA '.$nombre_pizza.' SE MODIFICO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../pizza.php">
			</head>
		</html>';
	}
}
else{
	$query=mysql_query("UPDATE pizza SET nombre_pizza='".$nombre_pizza."',descripcion_pizza='".$desc_pizza."' WHERE id_pizza='".$id_pizza."'");
	echo '
		<html>
			<head>
				<script>
				alert("LA PIZZA '.$nombre_pizza.' SE MODIFICO CORRECTAMENTE")
				</script>
				<meta http-equiv="REFRESH" content="0; url=../pizza.php">
			</head>
		</html>';
}
 ?>