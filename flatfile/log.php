<?php
$archivologs= "logs.dat";
@$ip = getenv(REMOTEADOR);
$navegador = $_SERVER ["HTTP_USER_AGENT"];

$contenido = date('U')."|".date("Y"."|"."m"."|"."d"."|"."H"."|"."i"."|"."s")."|".$navegador."|".$ip."\n";

$manehjador = fopen ($archivologs,'a+');
fwrite ($manehjador,$contenido);