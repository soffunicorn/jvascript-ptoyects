<!DOCTYPE html>
<?php
include("conexion.php");
?>
<html>
<head>
	<title>Datos del curso</title>
</head>
<body>
<?php 
	$id=$_GET['id'];
	$consulta=$conexion->query("select * from curso where id='$id'");
	foreach ($consulta as $c){
?>
<h2 style="color:#FF0000; width: 100%; text-align: center; margin-bottom: 1em;">Detalles del curso <?=$c['nombre'];?> </h2>

	<ul style="margin-bottom: 1em;">
		<li><p>Nombre: <?=$c['nombre'];?> </p></li>
		<li><p>Seccion: <?=$c['seccion'];?> </p></li>
		<li><p>Duracion del curso: <?=$c['duracion'];?> horas </p></li>
		<li><p>Fecha de Inicio: <?=$c['f_inicio'];}?> </p></li>
	</ul>

	<h2> Para seleccionar el asesor al curso dale click <a href="agregar.php?id_curso='<?=$id;?>'">Aqui</a></h2>


</body>
</html>