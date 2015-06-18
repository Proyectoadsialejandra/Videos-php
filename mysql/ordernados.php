<?php
$conexion = mysql_connect("localhost","diana","diana");
if (!~conexion){
	die(mysql_error());
}
mysql_select_db("agenda",$conexion);
$peticion= mysql_query("select* from miagenda order by Edad");

while ($fila = mysql_fetch_array($peticion)) {
	echo $fila['Nombre'];
	echo " ";
	echo $fila['Apellido'];
	echo " ";
	echo $fila['Edad'];
	echo " ";
	echo $fila['Telefono'];
    echo "<br>";
	# code...
}
mysql_close($conexion);
?>