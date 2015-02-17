<?php 
include'procesos/conexion.php';
$id_pizza=$_POST['id_pizza'];
$lista_p=$_POST['lista_p'];
$count=0;
$error=false;
$insertar=false;
  for ($i=0; $i <count($lista_p) ; $i++) { 
			$id_tamano=$lista_p[$i][1];
			$precio=$lista_p[$i][2];
			$id_lista_pizza=$lista_p[$i][3];
			if(($id_tamano!="") && ($precio!="")){
				$query=mysql_query("SELECT * FROM lista_pizza where id_tamano='".$id_tamano."' and id_pizza='".$id_pizza."'");
				$ejecuta=mysql_fetch_assoc($query);
				if(!$ejecuta){
					$insert=mysql_query("INSERT INTO lista_pizza(id_pizza,id_tamano,precio_lista_pizza)
										 VALUES('$id_pizza','$id_tamano','$precio')");
					if(!$insert){
						$error=true;
						}
					else{
						$insertar=true;
						$lista_tam[$count]=mysql_insert_id();
						$count++;
					}

				}
				else{

					$update=mysql_query("UPDATE lista_pizza SET precio_lista_pizza='".$precio."' WHERE id_lista_pizza='".$id_lista_pizza."'");
					if(!$update){
						$modificar=false;
					}
					else{
						$modificar=true;
					}
				}

			
			}
		}
		if($insertar==true){
				
			if($error==true){
				die("ocurrio un error");
			}
			else{
				#dibujar nuevo formulario
			include'procesos/lista_ingredientes.php';
			dibujar_form($lista_tam);
			}
		}
		else{
				echo '
				<html>
					<head>
						<script>
						alert("LOS PRECIOS SE MODIFICARON CORRECTAMENTE")
						</script>
						<meta http-equiv="REFRESH" content="0; url=pizza.php">
					</head>
				</html>';
		}
 ?>