<?php

$nombre = "Xavier Guereque";
$cliente = "123";
$correo = "xavier@correo.com";
$vendedor = "Noe Ortega";

$para1 = "noe.ortega@syscom.mx";
$titulo1 = "Cálculo de Videowalls - Privado";
$cabeceras1  = "MIME-Version: 1.0"."\r\n";
$cabeceras1 .= "Content-type: text/html; charset=utf-8"."\r\n";
$cabeceras1 .= "From: Calculador de Videowalls <calculador-videowalls@syscom.mx>"."\r\n";

$mensaje1 = "".
"Hola <b>$nombre</b>!<br><br>".
"Gracias por utilizar el calculador de Videowalls de SYSCOM. A continuación mencionamos los equipos que necesitas:<br>".
"<ul>".
//$conjunto.
"</ul>";

$mensaje1.= "<br>Tu número de cliente es: <b>$cliente</b>.".
"<br>Tu correo de contacto es: <b>$correo</b>.<br>".
"<br>Tu vendedor es: <b>$vendedor</b>.<br>";

echo $mensaje1.= "Reenvía este correo a tu vendedor para que te realice una cotización formal.<br><br>Que tengas un excelente día.";

//mail($para1,'=?UTF-8?B?'.base64_encode($titulo1).'?=', $mensaje1,$cabeceras1);