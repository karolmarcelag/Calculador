<?php

$llave_secreta = "6LcgYK8gAAAAAD_cWoZnhg1DAUOnpDyz0MMqN1ah";
$recapcha = $_POST["recaptcha"];

$ch = curl_init('https://www.google.com/recaptcha/api/siteverify'); //Lo primerito, creamos una variable iniciando curl, pasándole la url
curl_setopt ($ch, CURLOPT_POST, 1); //especificamos el POST (tambien podemos hacer peticiones enviando datos por GET
curl_setopt ($ch, CURLOPT_POSTFIELDS, "secret=$llave_secreta&response=$recapcha"); //le decimos qué paramáetros enviamos (pares nombre/valor, también acepta un array)
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); //le decimos que queremos recoger una respuesta (si no esperas respuesta, ponlo a false)
$respuesta = curl_exec ($ch); //recogemos la respuesta
//$error = curl_error($ch); //o el error, por si falla
curl_close ($ch); //y finalmente cerramos curl

$validar = strpos($respuesta,"true");
if($validar == true)
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

    $cantidad_pantalla = $tamano_horizontal * $tamano_vertical;
    $cantidad_decodificador = 0;
    $cantidad_controlador = 0;
    $valor_modelo_j11 = 0;
    $valor_3 = 0;
    $valor_f15 = 0;
    $f16 = 0;
    $n2 = 0;
    $valor_f16 = 0;
    $medida_horizontal = 0;
    $medida_vertical = 0;

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
        break;

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
    
    $soporte_pantalla = ($cantidad_pantalla * $valor_soporte_pantalla);

    switch($tipo_instalacion)
    {
        case "1":
        {
            $tipo_instalacion = "piso";
            $valor_1 = "";
            $componente_base_piso = "Base de Piso";
            $cantidad_base_piso = $tamano_horizontal;
        }
        break;

        case "2":
        {
            $tipo_instalacion = "pared";
            $valor_1 = "/WM";
            $componente_base_piso = " ";
            $modelo_base_piso = " ";
            $cantidad_base_piso = " ";
        }
        break;
    }

    if($tamano_pantalla == 46 && $tipo_instalacion == 1)
    {
        $medida_horizontal = $tamano_horizontal*1.02;
        $medida_vertical = $tamano_vertical*.58+.8;
    }
    elseif($tamano_pantalla == 46)
    {
        $medida_horizontal = $tamano_horizontal*1.02;
        $medida_vertical = $tamano_vertical*.58;
    }
    elseif($tamano_pantalla == 55 && $tipo_instalacion == 1)
    {
        $medida_horizontal = $tamano_horizontal*1.21;
        $medida_vertical = $tamano_vertical*.68+.8;
    }
    else
    {
        $medida_horizontal = $tamano_horizontal*1.21;
        $medida_vertical = $tamano_vertical*.68;
    }

    if($cantidad_camaras < 129)
    {
        $valor_n1 = 1;
    }
    else
    {
        if($cantidad_camaras < 257)
        {
            $valor_n1 = 2;
        }
        else
        {
            if($cantidad_camaras < 385)
            {
                $valor_n1 = 3;
            }
            else
            {
                $valor_n1 = 4;
            }
        }
    }

    if($cantidad_pantalla < 5)
    {
        $valor_n2 = 1;
    }
    else
    {
        if($cantidad_pantalla < 9)
        {
            $valor_n2 = 2;
        }
        else
        {
            if($cantidad_pantalla < 13)
            {
                $valor_n2 = 3;
            }
            else
            {
                if($cantidad_pantalla < 17)
                {
                    $valor_n2 = 4;
                }
                else
                {
                    $valor_n2 = 0;
                }
            }
        }
    }
    
    switch($uso)
    {
        case "1":
        {
            $uso = "Videovigilancia";
            
            $precio_decodificador = 1400;
            if($cantidad_camaras < 129)
            {
                $cantidad_decodificador = 1;
                $valor_f15 = " ";
            }
            else
            {
                if($cantidad_camaras < 257)
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
                $precio_decodificador = ($precio_decodificador * $cantidad_decodificador);
                $valor_f15 = "/".$cantidad_decodificador;
            }

            $decodificador = $precio_decodificador;
            $j11 = "Decodificador";
            $valor_j11 = $decodificador;
            $m1 = "VW";
            
            $f15 = $valor_f15;
            $valor_2 = $f15;
            $f16 = "-";
            $n1 = $valor_n1;
            $cantidad_j11 = $n1;
            $modelo_j11 = "DS-6919UDI(B)";
            $n2 = 0;
        }
        break;

        case "2":
        {
            $uso = "Digital Signage";
            $caja_senalizacion = 130;
            $j11 = "Caja Señalización";
            $valor_j11 = $caja_senalizacion;
            $m1 = "DW";
            
            $f15 = "-";
            $valor_2 = "";
            $f16 = "-";
            $n1 = 0;
            $cantidad_j11 = 1;
            $modelo_j11 = "DS-D60C-B";
            $n2 = 0;
        }
        break;

        case "3":
        {
            $uso = "Comercial";

            if($cantidad_pantalla >= 17)
            {
                $cantidad_controlador = "No Posible";
                $precio_controlador = "No Posible";
            }
            else
            {
                $precio_controlador = 400;
                if($cantidad_pantalla < 5)
                {
                    $cantidad_controlador = 1;
                    $valor_f16 = " ";
                }
                else
                {
                    if($cantidad_pantalla < 9)
                    {
                        $cantidad_controlador = 2;
                    }
                    elseif($cantidad_pantalla < 13)
                    {
                        $cantidad_controlador = 3;
                    }
                    elseif($cantidad_pantalla < 17)
                    {
                        $cantidad_controlador = 4;
                    }
                    $precio_controlador = ($precio_controlador * $cantidad_controlador);
                    $valor_f16 = "/".$cantidad_controlador;
                }
            }

            $controlador = $precio_controlador;
            $j11 = "Controlador";
            $valor_j11 = $controlador;
            $m1 = "CW";
            
            $f15 = "-";
            $f16 = $valor_f16;
            $valor_2 = $f16;
            $n1 = 0;
            $n2 = $valor_n2;
            $cantidad_j11 = $n2;
            $modelo_j11 = "DS-C12L-0204H";
        }
        break;
    }

    if($cantidad_decodificador == 1)
    {
        $valor_f15 = " ";
    }
    else
    {
        $valor_f15 = "/".$cantidad_decodificador;
    }

    if($valor_j11 != "No Posible")
    {
        $fob = $base_piso + $soporte_pantalla + $pantalla + $valor_j11;
        $arancel = $pantalla * .15;
        $subtotal = $fob + $arancel;
        $flete = $subtotal * .1;
        $total_landing = $subtotal + $flete;
        $factor = $total_landing * 2.8;
        $cantidad_soporte_pantalla = $cantidad_pantalla;
        $modelo = "DS".$m1.$tamano_horizontal."X".$tamano_vertical."LUY".$tamano_pantalla.$valor_1.$valor_2;
        $precio_de_lista = $factor;
        echo "1";
    }
    else
    {
        echo "-1";
    }

    //enviar correos
    include "correo_pm.php";
    include "correo_cliente.php";
}
else
{
    echo "-2";
}

?>