
<!DOCTYPE html>
<html>
<head>
	<title>formulario guardar mesa</title>
</head>
<body>
	<form action="procesos/guardar_mesa.php" method="POST">
		<table >
			<tr>
			<td>NUMERO DE MESA</td>
			<td><input type="text" name="numero_mesa" placeholder="Escriba el numero de la mesa"/ required></td>
			</tr>

			<tr>
			<td>DESCRIPCION DE LA MESA</td>
			<td><textarea name="desc_mesa"></textarea></td>
			</tr>

			<tr>
			<td><input type="submit" name="enviar" value="Guardar"/></td>
			</tr>
			
			</table>
	</form>
</body>
</html>