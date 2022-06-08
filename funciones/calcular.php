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
    $tipo_instalacion = $_POST["tipo_instalacion"];
    $tamano_horizontal = $_POST["tamano_horizontal"];
    $tamano_vertical = $_POST["tamano_vertical"];
    $uso = $_POST["uso"];
    if($uso == "1")
    {
        $cantidad_camaras = $_POST["cantidad_camaras"];
    }
    $cliente = $_POST["cliente"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $vendedor = $_POST["vendedor"];
    $conjunto = "";

    if($tamano_pantalla != "")
    {
        $conjunto.= "<li>Tamaño de pantalla: $tamano_pantalla</li>";
    }

    if($tipo_instalacion != "")
    {
        $conjunto. = "<li>Tipo de instalación: $tipo_instalacion</li>";
    }

    switch($tipo_instalacion)
    {
        case "1":
        {
            $tipo_instalacion = "piso";
        }
        case "2":
        {
            $tipo_instalacion = "pared";
        }
        break;
    }
    $conjunto. = "<li>Tipo de instalación: $tipo_instalacion</li>";
    
    if($tamano_horizontal != "" && $tamano_vertical != "")
    {
        $conjunto. = "<li>$tamano_horizontal x $tamano_vertical</li>";
    }



    if($cantidad_camaras < 129)
    {
        $cantidad_decodificador = 1;
    }
    elseif($cantidad_camaras < 257)
    {
        $cantidad_decodificador = 2;
    }
    elseif($cantidad_camaras < 385)
    {
        $cantidad_decodificador = 3;
    }
    else
    {
        $cantidad_decodificador = 4;
    }

    $precio_decodificador = {
        if($cantidad_camaras < 129)
        {
            $precio_decodificador = "1400";
        }
        elseif($cantidad_camaras < 257)
        {
            $precio_decodificador = (1400 * 2);
        }
        elseif($cantidad_camaras < 385)
        {
            $precio_decodificador = (1400 * 3);
        }
        else
        {
            $precio_decodificador = (1400 * 4);
        }
    }

    $cantidad_controlador = {
        if(($tamano_horizontal * $tamano_vertical) < 5)
        {
            $cantidad_controlador = "1";
        }
        elseif(($tamano_horizontal * $tamano_vertical) < 9)
        {
            $cantidad_controlador = "2";
        }
        elseif(($tamano_horizontal * $tamano_vertical) < 13)
        {
            $cantidad_controlador = "3";
        }
        elseif(($tamano_horizontal * $tamano_vertical) < 17)
        {
            $cantidad_controlador = "4";
        }
        else
        {
            $cantidad_controlador = "No Posible";
        }
    }

    $precio_controlador = {
        if(($tamano_horizontal * $tamano_vertical) < 5)
        {
            $precio_controlador = 400;
        }
        elseif(($tamano_horizontal * $tamano_vertical) < 9)
        {
            $precio_controlador = (400 * 2);
        }
        elseif(($tamano_horizontal * $tamano_vertical) < 13)
        {
            $precio_controlador = (400 * 3);
        }
        elseif(($tamano_horizontal * $tamano_vertical) < 17)
        {
            $precio_controlador = (400 * 4);
        }
        else
        {
            $precio_controlador = "No Posible";
        }
    }

    $base_piso = {
        if($tipo_instalacion == 1)
        {
            $base_piso = ($tamano_horizontal * {
                if($tamano_pantalla == 55)
                {
                    260;
                }
                else
                {
                    240;
                }})
        }
        else
        $base_piso = 0;
    }

    $soporte_pantalla = {

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

    echo $conjunto;

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