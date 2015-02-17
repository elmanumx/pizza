<?php 
	session_start();
	include 'conexion.php';
	$nombre_user = $_POST['usuario'];
	$pass = $_POST['pass'];
	$opcion = $_POST['opcion'];
	$passc="";
	$id_userc="";
	$verificar=false;
	$consulta = mysql_query("SELECT * FROM  usuario WHERE status_usuario = '1'");
	while($resultado = mysql_fetch_assoc($consulta)){
			$nombre_userc = $resultado['nombre_usuario'];
		$passc = $resultado['pass_usuario'];
		if(($pass == $passc)	&& ($nombre_user == $nombre_userc)){
			$_SESSION['id_usuario'] = $resultado['id_usuario'];
			$_SESSION['opcion'] = $opcion;
			$verificar=true;
		}
	}
	if($verificar==true){
		echo 'si';
	}else{
		echo 'no';
	}
 ?>
