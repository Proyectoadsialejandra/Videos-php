<?php
$conexion= mysql_connect("localhost","diana","diana");
// CREAR BASE DE DATOS

	if (mysql_query("CREATE  DATABASE Agenda",$conexion)) {
		echo "se ha creado la base de datos";
 }else {
 	echo "no se apodido crear la base de dtaos".mysql_error();
 }
// CREAR TABLA COLUMNAS 
 //PREPARAR PETICION
/* mysql_select_db("primerabase",$conexion);
 $sql = "CREATE TABLE Agenda(
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int 
 )";*/
//crear llave primaria 
mysql_select_db("agenda",$conexion);
 $sql = "CREATE TABLE miagenda(
 personaID int NOT NULL AUTO_INCREMENT,
 PRIMARY KEY(personaID),
Nombre varchar(15),
Apellido varchar(15),
Edad int,
Telefono int 
 )";


 //EJECUTAR PETICION
 $result = mysql_query($sql,$conexion);
 var_dump($result);
//CERRAR CONEXION
	mysql_close($conexion);

?>