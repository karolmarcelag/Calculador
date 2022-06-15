<?php

$nombre = "Xavier Guereque";
$cliente = "123";
$correo = "xavier@correo.com";
$vendedor = "Noe Ortega";

$tamano_pantalla = "46";
$tipo_instalacion = "Pared";
$H = "3";
$V = "2";
$tamano_horizontal = "3.63m";
$tamano_vertical = "1.36m";
$uso = "Videovigilancia";
$cantidad_camaras = "16";

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
echo "</html>";



//mail($para1,'=?UTF-8?B?'.base64_encode($titulo1).'?=', $mensaje1,$cabeceras1);