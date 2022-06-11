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

//$validar = strpos($respuesta,"true");
//if($validar == true)
if(1 == 1)
{
    $tamano_pantalla = $_POST["tamano_pantalla"];
    $tipo_instalacion = $_POST["tipo_instalacion"];
    $tamano_horizontal = $_POST["tamano_horizontal"];
    $tamano_vertical = $_POST["tamano_vertical"];
    $uso = $_POST["uso"];
    $cantidad_camaras = $_POST["cantidad_camaras"];

    $cliente = $_POST["cliente"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $vendedor = $_POST["vendedor"];
    $conjunto = "";

    echo ", Pantalla: ".$cantidad_pantalla = $tamano_horizontal * $tamano_vertical;
    $cantidad_decodificador = 0;
    $valor1_n1 = 0;
    $valor1_n2 = 0;

    switch($tamano_pantalla)
    {
        case "46":
        {
            $tamano_pantalla = 46;
            if($tipo_instalacion == 1)
            {
                $base_piso = ($tamano_horizontal * 240);
                $valor_soporte_pantalla = 120;
                $modelo_soporte_pantalla = "DS-DN46C2M/F";
                $modelo_base_piso = "DS-DN46C2M/B";
            }
            else
            {
                $base_piso = 0;
                $valor_soporte_pantalla = 102;
                $modelo_soporte_pantalla = "DS-DN4601W";
            }
            $pantalla = (($cantidad_pantalla + 1) * 970.83);
            $modelo_pantalla = "DS-D2046LU-Y";
        }
        case "55":
        {
            $tamano_pantalla = 55;
            if($tipo_instalacion == 1)
            {
                $base_piso = ($tamano_horizontal * 260);
                $valor_soporte_pantalla = 120;
                $modelo_soporte_pantalla = "DS-DN55B3M/F";
                $modelo_base_piso = "DS-DN55B3M/B";
            }
            else
            {
                $base_piso = 0;
                $valor_soporte_pantalla = 109;
                $modelo_soporte_pantalla = "DS-DN5501W";
            }
            $pantalla = (($cantidad_pantalla + 1) * 850);
            $modelo_pantalla = "DS-D2055LU-Y";
        }
        break;
    }
    $conjunto.= "<li>Tamaño de pantalla: $tamano_pantalla pulgadas</li>";
    
    $soporte_pantalla = ($cantidad_pantalla * $valor_soporte_pantalla);

    switch($tipo_instalacion)
    {
        case "1":
        {
            $tipo_instalacion = "piso";
            $valor_1 = "/VM";
            $componente_base_piso = "Base de Piso";
            echo ", Base de Piso: ".$cantidad_base_piso = $tamano_horizontal;

        }
        case "2":
        {
            $tipo_instalacion = "pared";
            $valor_1 = "";
            $componente_base_piso = " ";
            $modelo_base_piso = " ";
            $cantidad_base_piso = " ";
        }
        break;
    }
    $conjunto.= "<li>Tipo de instalación: $tipo_instalacion</li>";
    
    if($tamano_horizontal != "" && $tamano_vertical != "")
    {
        $conjunto.= "<li>$tamano_horizontal x $tamano_vertical</li>";
    }

    switch($uso)
    {
        case "1":
        {
            $uso = "Videovigilancia";

            if($cantidad_camaras < 129)
            {
                $cantidad_decodificador = 1;
                $precio_decodificador = 1400;
            }
            elseif($cantidad_camaras < 257)
            {
                $cantidad_decodificador = 2;
                $precio_decodificador = (1400 * 2);
            }
            elseif($cantidad_camaras < 385)
            {
                $cantidad_decodificador = 3;
                $precio_decodificador = (1400 * 3);
            }
            else
            {
                $cantidad_decodificador = 4;
                $precio_decodificador = (1400 * 4);
            }

            $decodificador = $precio_decodificador;
            $j11 = "Decodificador";
            $valor_j11 = $decodificador;

            $conjunto.= "<li>Cantidad de cámaras a ver simultaneamente: $cantidad_camaras</li>";
        }

        case "2":
        {
            $uso = "Digital Signage";
            $caja_senalizacion = 130;
            $j11 = "Caja Señalización";
            $valor_j11 = $caja_senalizacion;
        }

        case "3":
        {
            $uso = "Comercial";

            if($cantidad_pantalla < 5)
            {
                $cantidad_controlador = 1;
                $precio_controlador = 400;
            }
            elseif($cantidad_pantalla < 9)
            {
                $cantidad_controlador = 2;
                $precio_controlador = (400 * 2);
            }
            elseif($cantidad_pantalla < 13)
            {
                $cantidad_controlador = 3;
                $precio_controlador = (400 * 3);
            }
            elseif($cantidad_pantalla < 17)
            {
                $cantidad_controlador = 4;
                $precio_controlador = (400 * 4);
            }
            else
            {
                $cantidad_controlador = "No Posible";
                $precio_controlador = "No Posible";
            }

            $controlador = $precio_controlador;
            $j11 = "Controlador";
            $valor_j11 = $controlador;
        }
        break;
    }
    $conjunto.= "<li>Uso: $uso</li>";

    $fob = $base_piso + $soporte_pantalla + $pantalla + $valor_j11;
    $arancel = $pantalla * .15;
    $subtotal = $fob + $arancel;
    $flete = $subtotal * .1;
    $total_landing = $subtotal + $flete;
    $factor = $total_landing * 2.8;

    if($cantidad_decodificador == 1)
    {
        $valor_f15 = " ";
    }
    else
    {
        $valor_f15 = "/".$cantidad_decodificador;
    }

    if($j11 == "Decodificador")
    {
        $f15 = $valor_f15;
        $valor_2 = $f15;
        $modelo_j11 = "DS-6919UDI(B)";
        $n1 = $valor1_n1;
        echo ", Decodificador: ".$cantidad_j11 = $n1;
    }
    else
    {
        $f15 = "-";
        $valor_2 = $valor_3;
        $modelo_j11 = $valor_modelo_j11;
        $n1 = 0;
        echo ", Controlador: ".$cantidad_j11 = $valor_cantidad_j11;
    }

    if($cantidad_controlador == 1)
    {
        $valor_f16 = " ";
    }
    else
    {
        $valor_f16 = "/".$cantidad_controlador;
    }

    if($j11 == "Controlador")
    {
        $f16 = $valor_f16;
        $valor_3 = $f16;
        $valor_modelo_j11 = "DS-C12L-0204H";
        $n2 = $valor1_n2;
        $valor_cantidad_j11 = $n2;
    }
    else
    {
        $f16 = "-";
        $valor_3 = "";
        $valor_modelo_j11 = "DS-D60C-B";
        $n2 = 0;
        $valor_cantidad_j11 = 1;
    }

    echo ", Soporte Pantalla: ".$cantidad_soporte_pantalla = $cantidad_pantalla;


    if($cantidad_camaras < 385)
    {
        $valor3_n1 = 3;
    }
    else
    {
        $valor3_n1 = 4;
    }

    if($cantidad_camaras < 257)
    {
        $valor2_n1 = 2;
    }
    else
    {
        $valor2_n1 = $valor3_n1;
    }

    if($cantidad_camaras < 129)
    {
        $valor1_n1 = 1;
    }
    else
    {
        $valor1_n1 = $valor2_n1;
    }

    if($cantidad_pantalla < 17)
    {
        $valor4_n2 = 4;
    }
    else
    {
        $valor4_n2 = 0;
    }

    if($cantidad_pantalla < 13)
    {
        $valor3_n2 = 3;
    }
    else
    {
        $valor3_n2 = $valor4_n2;
    }

    if($cantidad_pantalla < 9)
    {
        $valor2_n2 = 2;
    }
    else
    {
        $valor2_n2 = $valor3_n2;
    }

    if($cantidad_pantalla < 5)
    {
        $valor1_n2 = 1;
    }
    else
    {
        $valor1_n2 = $valor2_n2;
    }

    echo ", Modelo: ".$modelo = "DSCW".$tamano_horizontal."X".$tamano_vertical."LUY".$tamano_pantalla.$valor_1.$valor_2;
    echo ", Precio de Lista: ".$precio_de_lista = $factor;


/*    //enviar correos
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
    echo ", OK";



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
    echo ", OK";



    $arreglo = array($);

    echo ", <table>";
    echo ", <tr>";
    echo    "<th> Horizontal </th>";
    echo    "<th> Vertical </th>";
    echo ", </tr>";
    echo ", <tr>";
    echo    "<td>" . $tamano_horizontal . "</td>";
    echo    "<td>" . $tamano_vertical . "</td>";
    echo ", </tr>";
    echo ", <tr><td>" . $arreglo[0] . "</td><td>" . $arreglo[1] . "</td></tr>";
    echo ", </table>";

*/
}
/*else
{
    echo ", error_recaptcha";
}*/
?>