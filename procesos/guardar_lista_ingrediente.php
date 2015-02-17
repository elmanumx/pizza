<?php 
	include'conexion.php';
$grupo_cantidad=$_POST['grupo_cantidad'];
$error=false;
for ($i=0; $i <count($grupo_cantidad) ; $i++) { 
	$id_ingrediente=$grupo_cantidad[$i][0];
	$id_lista_pizza=$grupo_cantidad[$i][1];
	$cantidad=$grupo_cantidad[$i][2];
	if(($cantidad!="") || ($cantidad!=null)){
	#echo "id_ingrediente=".$id_ingrediente."  id_pizza=".$id_lista_pizza."  porcion=".$cantidad."<br>";
		$insert=mysql_query("INSERT INTO lista_ingrediente (id_ingrediente,id_lista_pizza,porcion_lista_ingrediente)
							 VALUES('$id_ingrediente','$id_lista_pizza','$cantidad')");
		if(!$insert){
			$error=true;
		}
	}

}
if($error==true){
		die("error");
}
else{
	echo '
	<html>
		<head>
			<script>
				alert("registro guardado correctamente")
			</script>
			<meta http-equiv="REFRESH" content="0; url=../pizza.php">
		</head>
	</html>';	 

}
 ?>
