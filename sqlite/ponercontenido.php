<?php
$conexion = new PDO('sqlite:biblioteca.sqlite');

$count = $conexion->exec("insert into discos values('alejandra','la sinfonia','1915')");
$count = $conexion->exec("insert into discos values('shakira','mi verdad','2015')");
$count = $conexion->exec("insert into discos values('shakira','waka','2013')");


?>