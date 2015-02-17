<?php
function dibujar_form($lista_tam){
	include 'conexion.php';
	$seccion_ingrediente2="";
	$consulta="SELECT * FROM ingrediente ORDER BY id_categoria_ingrediente";
	$resultado = mysql_query($consulta);
	echo '
		<!DOCTYPE html>
		<html>
			<head>
				<title></title>
				<meta charset="UTF-8">

				';
				include 'include/lib-head-css.php';

					
					echo '<script type="text/javascript">
						function valida(id,limite){
							if(document.getElementById(id).checked){
								for (var i=0; i <limite; i++) { 
									var caja = id.toString()+id.toString()+i.toString();
									document.getElementById(caja).type="number";								
								}
							}
							else{
								for (var i=0; i <limite; i++) { 
									var caja = id.toString()+id.toString()+i.toString();								
									document.getElementById(caja).type="hidden";
									document.getElementById(caja).value="";
								}
							}
						}
					</script>
			</head>
			<body>
			 <div id="wrapper">
			 ';

    			include 'include/lib-navbar.php'; 
    			include 'include/lib-navaside.php';

    			
        echo '</nav><div id="page-wrapper" >';
       include 'include/page/lib-conten-ingre.php'; 
         
       echo '</div>';
       





   

					
				include 'include/lib-js.php';
     echo'
			</body>
		</html>
		';
}
	/*for ($i=0; $i <count($lista_tam) ; $i++) { 
		$id_lista_p=$lista_tam[$i];
$consulta=mysql_query("SELECT tamano.* FROM tamano,lista_pizza
 where tamano.id_tamano=lista_pizza.id_tamano and id_lista_pizza='".$id_lista_p."'");
$resultado =mysql_fetch_array($consulta);
$nombre_tamano=$resultado['nombre_tamano'];
echo $nombre_tamano."<br>";

	}
*/

 ?>
