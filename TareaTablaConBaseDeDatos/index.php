<?php 

$conexion=mysqli_connect('localhost','root','','tarea')

?>


<!DOCTYPE html>
<html>
<head>
	<title>TareaDeWeb</title>
</head>
<body>
	<br>
	<table border="2">
		<tr>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Direccion</td>
			<td>Email</td>
			<td>Telefono</td>
			<td>RFC</td>
		</tr>
		<?php 
		$sql="SELECT * from clientes";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
			?>
			<tr>
				<td> <?php echo $mostrar['nombre'] ?> </td>
				<td> <?php echo $mostrar['apellido'] ?> </td>
				<td> <?php echo $mostrar['direccion'] ?> </td>
				<td> <?php echo $mostrar['email'] ?> </td>
				<td> <?php echo $mostrar['telefono'] ?> </td>
				<td> <?php echo $mostrar['rfc'] ?> </td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>

