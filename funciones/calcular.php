<?php
/*$llave_secreta = "6LdaNHgUAAAAAB9hyap316cQ7QIJoawu27xTFYlD";
$recapcha = $_POST["recaptcha"];

$ch = curl_init('https://www.google.com/recaptcha/api/siteverify'); //Lo primerito, creamos una variable iniciando curl, pasándole la url
curl_setopt ($ch, CURLOPT_POST, 1); //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
curl_setopt ($ch, CURLOPT_POSTFIELDS, "secret=$llave_secreta&response=$recapcha"); //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
$respuesta = curl_exec ($ch); //recogemos la respuesta
//$error = curl_error($ch); //o el error, por si falla
curl_close ($ch); //y finalmente cerramos curl*/

$validar = strpos($respuesta,"true");
if($validar == true)
{
    $tamano_pantalla = $_POST["tamano_pantalla"];
    $tamano_horizontal = $_POST["tamano_horizontal"];
    $tamano_vertical = $_POST["tamano_vertical"];
    $tipo_instalacion = $_POST["tipo_instalacion"];
    $uso = $_POST["uso"];
    if($uso == "1")
    {
        $cantidad_camaras = $_POST["cantidad_camaras"];
    }
    $cliente = $_POST["cliente"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $vendedor = $_POST["vendedor"];

    if($tamano_pantalla != "")
    {
        $conjunto. = "<li>Tamaño de pantalla: $tamano_pantalla</li>";
    }
    
    if($tamano_horizontal != "" && $tamano_vertical != "")
    {
        $conjunto. = "<li>$tamano_horizontal x $tamano_vertical</li>";
    }

    if($tipo_instalacion != "")
    {
        $conjunto. = "<li>Tipo de instalación: $tipo_instalacion</li>";
    }

    switch($uso)
    {
        case "1":
        {
            $uso.= "Videovigilancia";
        }
        break;
        case "2":
        {
            $uso.= "Digital Signage";
        }
        break;
        case "3":
        {
            $uso.= "Comercial";
        }
        break;
        $conjunto = "<li>Uso: $uso</li>";
    }

    if($cantidad_camaras != "")
    {
        $conjunto. = "<li>Cantidad de cámaras a ver simultaneamente: $cantidad_camaras</li>";
    }

    //enviar correos
    $para1 = $correo;
    $titulo1 = "Cálculo de Videowalls";
    $cabeceras1  = "MIME-Version: 1.0"."\r\n";
    $cabeceras1 .= "Content-type: text/html; charset=utf-8"."\r\n";
    $cabeceras1 .= "Bcc: noe.ortega@syscom.mx"."\r\n";
    $cabeceras1 .= "Reply-To: ventas@syscom.mx"."\r\n";
    $cabeceras1 .= "From: Calculador de Videowalls <calculador-videowalls@syscom.mx>"."\r\n";
    
    $mensaje1 = "".
    "Hola <b>$nombre</b>!<br><br>".
    "Gracias por utilizar el calculador de Videowalls de SYSCOM. A continuación mencionamos los equipos que necesitas:<br>".
    "<ul>".
    $conjunto.
    "</ul>";

    $mensaje1.= "<br>Tu número de cliente es: <b>$cliente</b>.".
    "<br>Tu correo de contacto es: <b>$correo</b>.<br>".
    "<br>Tu vendedor es: <b>$vendedor</b>.<br>";

    $mensaje1.= "Reenvía este correo a tu vendedor para que te realice una cotización formal.<br><br>Que tengas un excelente día.";

    //mail($para1,'=?UTF-8?B?'.base64_encode($titulo1).'?=', $mensaje1,$cabeceras1);
    echo "OK";


    $para1 = "noe.ortega@syscom.mx";
    $titulo1 = "Cálculo de Videowalls - Privado";
    $cabeceras1  = "MIME-Version: 1.0"."\r\n";
    $cabeceras1 .= "Content-type: text/html; charset=utf-8"."\r\n";
    $cabeceras1 .= "From: Calculador de Videowalls <calculador-videowalls@syscom.mx>"."\r\n";
    
    $mensaje1 = "".
    "Hola <b>$nombre</b>!<br><br>".
    "Gracias por utilizar el calculador de Videowalls de SYSCOM. A continuación mencionamos los equipos que necesitas:<br>".
    "<ul>".
    $conjunto.
    "</ul>";

    $mensaje1.= "<br>Tu número de cliente es: <b>$cliente</b>.".
    "<br>Tu correo de contacto es: <b>$correo</b>.<br>".
    "<br>Tu vendedor es: <b>$vendedor</b>.<br>";

    $mensaje1.= "Reenvía este correo a tu vendedor para que te realice una cotización formal.<br><br>Que tengas un excelente día.";

    //mail($para1,'=?UTF-8?B?'.base64_encode($titulo1).'?=', $mensaje1,$cabeceras1);
    echo "OK";


    $arreglo = array($);

    echo "<table>";
    echo "<tr>";
    echo    "<th> Horizontal </th>";
    echo    "<th> Vertical </th>";
    echo "</tr>";
    echo "<tr>";
    echo    "<td>" . $tamano_horizontal . "</td>";
    echo    "<td>" . $tamano_vertical . "</td>";
    echo "</tr>";
    echo "<tr><td>" . $arreglo[0] . "</td><td>" . $arreglo[1] . "</td></tr>";
    echo "</table>";


}
/*else
{
    echo "error_recaptcha";
}*/
?>