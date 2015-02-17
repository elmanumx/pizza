<?php include'procesos/conexion.php';
$id_mesa="1";
$query=mysql_query("SELECT * FROM mesa where id_mesa='".$id_mesa."'");
$result=mysql_fetch_assoc($query);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>formulario guardar mesa</title>
</head>
<body>
	<form action="procesos/modificar_mesa.php" method="POST">
		<table >
			<tr>
			<td>NUMERO DE MESA</td>
			<td><input type="text" name="numero_mesa" placeholder="Escriba el numero de la mesa"/ value="<?php echo $result['numero_mesa']; ?>" required></td>
			</tr>

			<tr>
			<td>DESCRIPCION DE LA MESA</td>
			<td><textarea name="desc_mesa"><?php echo $result['descripcion_mesa']; ?></textarea></td>
			</tr>

			<tr>
			<input type="hidden" name="id_mesa" value="<?php echo $id_mesa; ?>" />
			<input type="hidden" name="numero_actual" value="<?php echo $result['numero_mesa']; ?>" />
			<td><input type="submit" name="enviar" value="Guardar"/></td>
			</tr>
			
			</table>
	</form>
</body>
</html>