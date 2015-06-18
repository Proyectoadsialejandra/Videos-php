<?php
$conexion = new PDO('sqlite:biblioteca.sqlite') ;

$consulta= 'CREATE TABLE Discos(
Artista char(20) Not Null,
Disco char(40) Not Null,
Anio Integer,



	)';
$conexion=$conexion->exec($consulta);
?> 