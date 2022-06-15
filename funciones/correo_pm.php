<?php

$nombre = "Xavier Guereque";
$cliente = "123";
$correo = "xavier@correo.com";
$vendedor = "Noe Ortega";

$tamano_pantalla = "46";
$tipo_instalacion = "Piso";
$H = "3";
$V = "2";
$tamano_horizontal = "3.63m";
$tamano_vertical = "2.16m";
$uso = "Videovigilancia";
$cantidad_camaras = "16";

$base_piso = "$780";
$soporte_pantalla = "$720.00";
$pantalla = "$5,950.00";
$decodificador = "$1,400.00";
$fob = "$8,850.00";
$arancel = "$892.50";
$subtotal = "$9,742.50";
$flete = "$874.25";
$total_landing = "$10,716.75";
$factor = "$30,006.90";

$c_pantalla ="Pantalla";
$c_decodificador = "Decodificador";
$c_soporte = "Soporte Pantalla";
$c_base = "Base de Piso";
$m_pantalla ="DS-D2055LU-Y";
$m_decodificador = "DS-6916UDI(B)";
$m_soporte = "DS-DN55B3M/F";
$m_base = "DS-DN55B3M/B";
$t_pantalla ="6";
$t_decodificador = "1";
$t_soporte = "6";
$t_base = "3";

$modelo = "DSVW3X2LUY55";
$precio_de_lista = "$30,006.90";

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

echo $mensaje1.= "Reenvía este correo a tu vendedor para que te realice una cotización formal.<br><br>Que tengas un excelente día.<br><br><br>";


echo "<link href='../estilos/estiloTabla.css' rel='stylesheet'>";
echo "<html>";
    echo "<div class='tabla'>";
        echo "<table>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Tamaño de Pantalla</th>";
                    echo "<th>Tipo de instalación</th>";
                    echo "<th>Horizontal</th>";
                    echo "<th>Vertical</th>";
                    echo "<th>Medida Horizontal</th>";
                    echo "<th>Medida Vertical</th>";
                    echo "<th>Uso</th>";
                    echo "<th>Cant. de cám. simul.</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbod>";
                echo "<tr>";
                    echo "<td>".$tamano_pantalla."</td>";
                    echo "<td>".$tipo_instalacion."</td>";
                    echo "<td>".$H."</td>";
                    echo "<td>".$V."</td>";
                    echo "<td>".$tamano_horizontal."</td>";
                    echo "<td>".$tamano_vertical."</td>";
                    echo "<td>".$uso."</td>";
                    echo "<td>".$cantidad_camaras."</td>";
                echo "</tr>";
            echo "</tbod>";
        echo "</table>";
    echo "</div>";
    echo "<br><br><br>";
    echo "<div class='tabla'>";
        echo "<table>";
        echo "<caption>Componentes + 1 Pantalla</caption>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Base Piso</th>";
                    echo "<th>Soporte Pantalla</th>";
                    echo "<th>Pantalla</th>";
                    echo "<th>Decodificador</th>";
                    echo "<th>FOB</th>";
                    echo "<th>Arancel (15% Pantallas)</th>";
                    echo "<th>Subtotal</th>";
                    echo "<th>Flete (10%)</th>";
                    echo "<th>Total "."landing"."</th>";
                    echo "<th>Factor 2.8</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbod>";
                echo "<tr>";
                    echo "<td>".$base_piso."</td>";
                    echo "<td>".$soporte_pantalla."</td>";
                    echo "<td>".$pantalla."</td>";
                    echo "<td>".$decodificador."</td>";
                    echo "<td>".$fob."</td>";
                    echo "<td>".$arancel."</td>";
                    echo "<td>".$subtotal."</td>";
                    echo "<td>".$flete."</td>";
                    echo "<td>".$total_landing."</td>";
                    echo "<td>".$factor."</td>";
                echo "</tr>";
            echo "</tbod>";
        echo "</table>";
    echo "</div>";
    echo "<br><br><br>";
    echo "<div class='tabla'>";
        echo "<table>";
            echo "<tbod>";
                echo "<tr>";
                    echo "<td>Modelo</td>";
                    echo "<td><b>".$modelo."</b></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>Precio de Lista</td>";
                    echo "<td><b>".$precio_de_lista."</b></td>";
                echo "</tr>";
            echo "</tbod>";
        echo "</table>";
    echo "</div>";
    echo "<br><br><br>";
    echo "<div class='tabla'>";
        echo "<table>";
        echo "<caption>Componentes</caption>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Componente</th>";
                    echo "<th>Modelo</th>";
                    echo "<th>Cant.</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbod>";
                echo "<tr>";
                    echo "<td>".$c_pantalla."</td>";
                    echo "<td>".$m_pantalla."</td>";
                    echo "<td>".$t_pantalla."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>".$c_decodificador."</td>";
                    echo "<td>".$m_decodificador."</td>";
                    echo "<td>".$t_decodificador."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>".$c_soporte."</td>";
                    echo "<td>".$m_soporte."</td>";
                    echo "<td>".$t_soporte."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>".$c_base."</td>";
                    echo "<td>".$m_base."</td>";
                    echo "<td>".$t_base."</td>";
                echo "</tr>";
            echo "</tbod>";
        echo "</table>";
    echo "</div>";
echo "</html>";



//mail($para1,'=?UTF-8?B?'.base64_encode($titulo1).'?=', $mensaje1,$cabeceras1);