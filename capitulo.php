
	<?php
        //variables de formularios
	//echo "tu nombre es" .$_GET['Nombre']. "<br>";
	//echo "tu apellido es" .$_GET ['Apellido'];
    echo "ENTEROS Y GOMAS FLOTANTES";
    echo "<br>";
	$ENTEROS = 5;
	echo $ENTEROS;

	echo "<br>";
	$decimal = 5.432;
	echo $decimal;
	echo "<br>";
	$cientifica= 0.123e2;
	echo $cientifica;
	echo "<br>";
	echo " BOLEANOS"; 
	echo "<br>";
	$boleana= true;
	echo "el valor de la variable es ". $boleana;
	echo "<br>";
	$boleana= false;
	echo "el valor de la variable es ". $boleana;
     echo "<br>";
     echo "<br>";
	echo 'REBACAR INFORMACION';
	echo "<br>";
	echo "<br>";
	@$tuip = getenv(REMOTE_ADDR);
	echo "tu ip es". $tuip;
	$tunavegador= $_SERVER["HTTP_USER_AGENT"];
	echo "<br>";
	echo "Y TU SISTEMA OPERATIVO Y NAVEGADOR ES:". $tunavegador;
	echo "<br>";
	echo "<br>";
	
  echo 'CADENAS Y DOBLES COMILLA';
  echo "<br>";
   echo "<br>";
  echo "SOY UNA CADENA";

  echo "<br>";
  echo "<br>";
  echo 'SOY UNA CADENA';
  echo "soy una \cadena\ y estoy obligada";
  echo "<br>";
   echo "<br>";
  echo 'OPERADORES ARITMETICOS';
   echo "<br>";
   echo 3+3;
   echo "<br>";
   echo 3-2;
   echo "<br>";
   echo 4*2;
   echo "<br>";
   echo 20 / 5;
   echo "<br>";
   echo 20 % 6;
   echo "<br>";
   $hola =2;
   echo  $hola++; 
   echo "<br>";
   echo "<br>";
   echo "OPERAODRES INCREMENTOS  Y POST INCREMENTO";
   echo "<br>";
   
   $primera =3;
   echo "<br>";
   echo $primera++;
   echo "<br>";
   echo  $primera;
   echo "<br>";
   echo "<br>";
   echo "OPERADORESDE CADENA ";
     echo "<br>";
   $mi= "mi nombre es:";
   $nombre="alejandra serrano";
   $saludo="hola mundo";
   echo  $mi.$nombre.$saludo;
   echo "<br>";
   echo "<br>";
   echo "OPERADORES DE ASIGNACION";
   echo "<br>";
   $mivariable= 7;
   echo $mivariable;
    $mivariable +=5;
     echo "<br>";
    echo $mivariable;
     echo "<br>";
     $mivariable -=5;
     echo $mivariable;
      echo "<br>";
        $mivariable *=5;
        echo $mivariable;
       echo "<br>";
         $mivariable /=5;
        echo $mivariable;
        echo "<br>";
   echo "OPERADORES DE COMAPRACION";
   echo "<br>";
   echo 3==3;//IGUAL
   echo 3===3;//IGUAL E IDENTICO
   echo 3!=4; //IGUAL dE DIFERENCIA
   echo "<br>";
   IF(2>3){echo "TRES ES MAYOR QUE DOS";}ELSE{echo "TRES NO ES MAYOR QUE DOS";}
   echo "<br>";
   echo "<br>";
   echo "ESTRUCTURA DE CONTROL IF ";
   echo "<br>";
   echo "<br>";

   IF ("rojo"=="verde" ){
   	echo "el color si es rojo";

   }else {
   	echo "el color no cincide";
   }
   echo "<br>";
   IF ("rojo"=="verde" ){
   	echo "el color si es rojo";

   }else {
   	echo "el color no cincide";
   }
   echo "<br>";
   echo "<br>";
   echo "ESTRUCTURA FOR ";
   echo "<br>";
   for ($numero=5; $numero<=20 ; $numero=$numero+2) { 
   	# code...
   	echo "hace".$numero."veces que paso por aqui<br>";
   }
   echo "la operacion a finalizado";
   echo "<br>";
   echo "<br>";
   echo "ESTRUCTURA while ";
   echo "<br>";
   $variable = 0;
   while ($variable <= 10) {
   	# code...
   	echo $variable."Hola<br>";

   	$variable=	$variable+1;
   }
   echo "<br>";
   echo "<br>";
   echo "ESTRUCTURA do while ";
   echo "<br>";

   $variable = 1;
   do{

   	echo "hola";
   }

   while ( $variable > 2) ;
   	echo "ya ha finalizado";
   	echo "<br>";
   echo "<br>";
   echo "ESTRUCTURA goto ";
   echo "<br>";
   goto marca;
   echo "estero texto me lo salto";
   marca:
   echo "este es el texto que te muestro";
   echo "<br>";
   echo "ESTRUCTURA foreach ";
   echo "<br>";
   $matriz = array("coche","csa","moto","mundo");
   foreach ( $matriz as $valor ) {
   	echo "$valor.<br/>";
   
   }
  /* echo "<br>";
   echo "<br>";
   echo "MATRICES ";
   echo "<br>";
  
   $fruta[0]="mnzana";
    $fruta[1="pera";
     $fruta[2]="platano";

     for ($numero=0;$numero<=2;$numero++){
     	echo $fruta[$numero]."<br>";
     }*/
   
   
   

   


   
   



        	?>
	
