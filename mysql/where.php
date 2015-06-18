<?php
$conexion = mysql_connect("localhost","diana","diana");


mysql_select_db("agenda",$conexion);
$peticion = mysql_query("select*from miagenda where Nombre='ALEJANDRA'");

while ($fila = mysql_fetch_array($peticion)){

	echo $fila['Nombre']." ".$fila['Apellido']." ".$fila['Edad']." ".$fila['Telefono'];
	echo "<br>";
}
mysql_close($conexion);
?>