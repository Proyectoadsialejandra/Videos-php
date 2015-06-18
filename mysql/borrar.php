<?php
$conexion = mysql_connect("localhost","diana","diana");

mysql_select_db("agneda",$conexion);

mysql_query("DELETE FROM miagenda WHERE Nombre ='Alejandra ' AND Apellido= 'Serrano'");
 mysql_close($conexion)
?>