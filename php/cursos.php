<!DOCTYPE html>
<?php
include("conexion.php");
?>
<html>
<head>
	<title>Cursos</title>
</head>
<body>
	<h3>Bienvenido a la page donde se ven todos los cursos</h3>
	<table border="2">
		<thead>
			<tr>
				<th>Nombre del Curso</th>
				<th>Detalles</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
					<?php
			$prueba=$conexion->query("select * from curso");
			foreach ($prueba as $pr){
				echo "<tr><td>".$pr['nombre']."</td>
				<td><a href='datos-curso.php?id=".$pr['id']."'>Ver detalles del Curso</a></td> <td><input type='checkbox'/></td></tr>";
			}
			?>

		</tbody>
	</table>
</body>
</html>