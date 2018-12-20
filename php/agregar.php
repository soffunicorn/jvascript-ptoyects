<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Agregar asesor</title>
	<style type="text/css">
	form{
		width: 800px;
		margin: 5em;
	}
		select{
			width: 100%;
			margin: 1.5em;

		}
		select option{
			width:100px;
			height:20px;
			padding:5px;
		}
		.btn{
			margin-left:300px;
			margin-right:300px;
			width: 200px;
			height:40px;
			color:#ff0000;
			font-size: 1em;
			background-color: #f2f2f2;

		}
		h3{
			width: 100%;
			text-align: center;
			margin-top: 1.5em;

		}
	</style>
</head>
<body>
	<?php
	$id_curso=$_GET['id_curso'];
	?>
	<h3>Lista de asesores para agregar</h3>
	
	<form method="post" action="procesar.php">
		<select name="nameA">
		<?php
		$consulta=$conexion->query("select * from asesor");
		foreach ($consulta as $key) {
		?>
		<?php echo"<option  value='".$key['id']."'>".$key['nombre']."</option>"; }?>
	</select>
	<input type="hidden" name="hidd" value="<?=$id_curso;?>">
	<input type="submit" class="btn" name="enviar" value="Enviar">
</form>

</body>
</html>