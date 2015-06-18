<?php
$conexion = mysql_connect("localhost","diana","diana");

mysql_select_db("agenda",$conexion);
mysql_query("INSERT INTO miagenda (Nombre,Apellido,Edad,Telefono) values ('Alejandra','Gomez',15 '3123456789')"); 

mysql_close($conexion);

?>
