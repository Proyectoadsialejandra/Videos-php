<?php



	function createDB ($nameDB = "Usuarios", $pathDB = ""){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    echo "<i class='fa fa-check-square-o'></i> Se ha creado/seleccionado la base de datos correctamente."."<br/>";

		    /* Creacion de la tabla Usuarios */
		    $query = "CREATE TABLE 'Usuarios' (
						'idUsuario'	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						'Nombres'	TEXT NOT NULL,
						'Apellidos'	TEXT NOT NULL,
						'Direccion'	TEXT NOT NULL,
						'Telefono'	TEXT NOT NULL,
						'Estado'	TEXT NOT NULL DEFAULT 'Activo'
					);"; //Creacion del query para crear la tabla.
		    $result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
		    echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Usuarios."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Usuarios."."<br/>";

		    /* Creacion de la tabla Automoviles */
		    $query = "CREATE TABLE `Automovil` (
						`idAutomovil`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						`Marca`	TEXT NOT NULL,
						`Modelo`	TEXT NOT NULL,
						`Color`	TEXT NOT NULL,
						`Placa`	TEXT NOT NULL,
						`Estado`	TEXT NOT NULL
					);";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla Automovil."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla Automovil."."<br/>";


 
// CREAR TABLA CONFIGURACION USUARIOS

$query = "CREATE TABLE `configusuario` (
						`idconfig`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						`usuario`	int NOT NULL,
						`piel`	int NOT NULL,
						`respuestas `	int NOT NULL
						
	
					);";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla configusuario."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla configusuario."."<br/>";
 
    $query = "CREATE TABLE `post` (
						`idpost`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						`anio`	int NOT NULL,
						`mes`	int NOT NULL,
						`dia`	int NOT NULL,
						`hora`	int NOT NULL,
						`minuto`	int NOT NULL,
						`segundo`	int NOT NULL,
						`titulo`	TEXT NOT NULL,
						`subtitulo`	TEXT NOT NULL,
						`email`	TEXT NOT NULL
						
	
					);";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla post."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla post."."<br/>";


 $query = "CREATE TABLE `logs` (
						`idlogs`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
						`anio`	int NOT NULL,
						`mes`	int NOT NULL,
						`dia`	int NOT NULL,
						`hora`	int NOT NULL,
						`minuto`	int NOT NULL,
						`segundo`	int NOT NULL,
						`ip`	TEXT NOT NULL,
						`navegador`	TEXT NOT NULL,
						`usuario`	TEXT NOT NULL,
						`operacion`	TEXT NOT NULL
						
	
					);";
			$result = $db->exec($query); //Ejecutamos el query. Se usa exec para todos los casos excepto para los select.
			echo ($result === false) ? "<i class='fa fa-times-circle'></i> No se pudo crear la Tabla logs."."<br/>" : "<i class='fa fa-check-square-o'></i> Se creo correctamente la Tabla logs."."<br/>";

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}




	/* Funcion para ejecutar querys de tipo Insert, Update, Deleted */
	function excuteQuery ($nameDB = "Usuarios", $pathDB = "", $query, $params=NULL){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    if ($params === NULL){
				/* Intentamos Ejecutar el Query */
		    	$result = $db->exec($query);
		    }else{
		    	/* Intentamos Ejecutar el Query */
		    	$cmd = $db->prepare($query);
		    	$result = $cmd->execute($params);
		    }

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		    return ($result);
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

	/* Funcion para ejecutar querys de tipo Selects */
	function newQuery ($nameDB = "Usuarios", $pathDB = "", $query){
		try {
			/* Creacion de la Base de Datos o Seleccion de la misma*/
		    $db = new PDO("sqlite:".$pathDB.$nameDB.".sqlite"); //Creamos una conexion
		    
		    /* Intentamos Ejecutar el Query */
		    $result = $db->query($query);

		    $db = NULL; //Cerramos la conexion a la Base de datos.
		    return ($result);
		}catch(PDOException $e){
		    echo $e->getMessage();
		}
	}

?>