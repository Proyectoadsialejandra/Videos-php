
<?php

$conexion = mysql_connect("localhost","diana","diana");

if (!$conexion) {
	die("no e pdido conectar ".mysql_error());
	# code...
}
/*mysql_select_db("agenda",$conexion);
mysql_query("INSERT INTO miagenda(Nombre,Apellido,Edad,Telefono)
VALUES('ALEJANDRA','SERRANO',17,'312467890')");

mysql_query("INSERT INTO miagenda(Nombre,Apellido,Edad,Telefono)
VALUES('MARIA','PEREZ',17,'312467890')");*/
//crear un select
mysql_select_db("agenda",$conexion);
$peticion= mysql ("select* from miagenda");
while ($fila= mysql_fetch_array($peticion) ) {
	echo $fila['Nombre']."".$fila['Apellido']."".$fila['Edad']."".$fila['Telefono'];
	echo "<br>";
	# code...
}

mysql_close($conexion);
?>