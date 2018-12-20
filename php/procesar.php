<?php
include("conexion.php");
$idcurso=$_POST['hidd'];
$idasesor=$_POST['nameA'];

$sql="insert into asesor_curso values('$idcurso','$idasesor')";
 $resultado=$conexion->exec($sql);
?>
