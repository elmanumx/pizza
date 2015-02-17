<?php 
	session_start();
	$id_mesa=$_SESSION['id_mesa'];
	$id_empleado=$_SESSION['cve_mesero'];
	$opc=$_SESSION['opc'];
	$cadena='';
	$cantidad=0;
	include'conexion.php';
	if($opc=="2"){
		$id_venta=$_SESSION['id_venta'];
		$delete=mysql_query("DELETE FROM lista_venta WHERE id_venta='".$id_venta."'");
	}else{
	$insert=mysql_query("INSERT INTO venta (id_mesa,id_empleado,status_venta)
	 					VALUES('$id_mesa','$id_empleado','pendiente')");
			$id_venta=mysql_insert_id();
			$update=mysql_query("UPDATE mesa SET temporal_mesa='ocupada' WHERE id_mesa='".$id_mesa."'");
		}

			    foreach ($_SESSION['carro'] as $k => $v){   
		        	$tipo=$_SESSION['carro'][$k]['tipo'];
		        	$id_piz_pro=$_SESSION['carro'][$k]['folio'];
		        	$cantidad=$_SESSION['carro'][$k]['cantidad'];
		        	$monto_lista=$_SESSION['carro'][$k]['subtotal'];
		        	$nombre_lista=$_SESSION['carro'][$k]['nombre'];
			        $buscar = strpos($tipo, "pro");

			        if($buscar!==false){
			        	$cadena='id_producto';
			        }else{
			        	$cadena='id_lista_pizza';			        				        	
			        }	
		        	$insert=mysql_query("INSERT INTO lista_venta (cantidad_lista_venta,monto_lista_venta,id_venta,nombre_lista_venta,$cadena)
										VALUES('$cantidad','$monto_lista','$id_venta','$nombre_lista','$id_piz_pro')");
					if(!$insert){
						$x=mysql_error();
						die("Ocurrio al insertar id en producto: $x"); 
					}
	       		}
        		unset($_SESSION['carro']);
		       	echo '
					<html>
						<head>
							<script>
							alert("LA ORDEN SE HA GENERADO CORRECTAMENTE")
							</script>
							<meta http-equiv="REFRESH" content="0; url=../opciones_mesero.php">
						</head>
					</html>';
	
 ?>