<?php 
include'procesos/conexion.php';
$nombre_pizza=$_POST['nombre_pizza'];
$desc_pizza=$_POST['desc_pizza'];
$lista_p=$_POST['lista_p'];
$var=$_FILES['imagen_pizza']['name'];
if($var!="") {
    $img_pizza=rand().$nombre_pizza.$var;
	$query=mysql_query("INSERT INTO pizza (nombre_pizza,descripcion_pizza,img_pizza)
						VALUES('$nombre_pizza','$desc_pizza','$img_pizza')");
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
		$count=0;
		$error=false;
		$id_pizza=mysql_insert_id();
		$directorio ='img/pizza/';
        move_uploaded_file($_FILES['imagen_pizza']['tmp_name'],$directorio.$img_pizza);
        for ($i=0; $i <count($lista_p) ; $i++) { 
			$id=$lista_p[$i][1];
			$precio=$lista_p[$i][2];
			if(($id!="") && ($precio!="")){
				$insert=mysql_query("INSERT INTO lista_pizza(id_pizza,id_tamano,precio_lista_pizza)
									 VALUES('$id_pizza','$id','$precio')");
				$lista_tam[$count]=mysql_insert_id();
				$count++;
				if(!$insert){
					$error=true;
				}
			
			}
		}
		if($error==true){
			die("ocurrio un error");
		}
		else{
			#dibujar nuevo formulario
			include'procesos/lista_ingredientes.php';
			dibujar_form($lista_tam);
		}
	}
}
else{
			echo '
			<html>
				<head>
					<script>
					alert("error, Todavia NO Ha Selecionado Nada")
					window.history.back();
					</script>
					</head>
			</html>
			';		
exit();
}
	/*
}


}*/

 ?>