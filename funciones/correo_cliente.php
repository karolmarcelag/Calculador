<?php

$nombre = "Xavier Guereque";
$cliente = "123";
$correo = "xavier@correo.com";
$vendedor = "Noe Ortega";

$tamano_pantalla = "46";
$tipo_instalacion = "Piso";
$medida_horizontal = "3";
$medida_vertical = "2";
$tamano_horizontal = "3.63m";
$tamano_vertical = "2.16m";
$uso = "Videovigilancia";
$cantidad_camaras = "16";

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

$mensaje = "";

$nombre_noti = "Noé Ortega";
$correo_noti = "noe.ortega@syscom.mx";

$titulo = "Cálculo de Videowalls - Privado";
$mensaje = "
<html>
    <head>
        <title>Cálculo Videowall</title>
    </head>
    <body>
        <div class='cuerpo'>
            <div class='fuera'>
                <div><img src='https://ingenieria.syscom.mx/imagenes/logo-syscom.png'></div>
            </div>
            <div class='contenido'>

                $mensaje
                Hola ¡<b>$nombre</b>!<br><br>
                Gracias por utilizar el calculador de Videowalls de SYSCOM. A continuación mencionamos los requisitos solicitados y los equipos que necesitas:<br><br>

                <link href='../estilos/estiloTabla.css' rel='stylesheet'>
                <div class='tabla'>
                    <table>
                        <thead>
                            <tr>
                                <th>Tamaño de Pantalla</th>
                                <th>Tipo de instalación</th>
                                <th>Horizontal</th>
                                <th>Vertical</th>
                                <th>Medida Horizontal</th>
                                <th>Medida Vertical</th>
                                <th>Uso</th>
                                <th>Cant. de cám. simul.</th>
                            </tr>
                        </thead>
                        <tbod>
                            <tr>
                                <td>".$tamano_pantalla."</td>
                                <td>".$tipo_instalacion."</td>
                                <td>".$medida_horizontal."</td>
                                <td>".$medida_vertical."</td>
                                <td>".$tamano_horizontal."</td>
                                <td>".$tamano_vertical."</td>
                                <td>".$uso."</td>
                                <td>".$cantidad_camaras."</td>
                            </tr>
                        </tbod>
                    </table>
                </div>
                
                <div class='tabla'>
                    <table>
                        <tbod>
                            <tr>
                                <td>Modelo</td>
                                <td><b>".$modelo."</b></td>
                            </tr>
                            <tr>
                                <td>Precio de Lista</td>
                                <td><b>".$precio_de_lista."</b></td>
                            </tr>
                        </tbod>
                    </table>
                </div>
                
                <div class='tabla componentes'>
                    <table>
                    <caption>Componentes</caption>
                        <thead>
                            <tr>
                                <th>Componente</th>
                                <th>Modelo</th>
                                <th>Cant.</th>
                            </tr>
                        </thead>
                        <tbod>
                            <tr>
                                <td>".$c_pantalla."</td>
                                <td>".$m_pantalla."</td>
                                <td>".$t_pantalla."</td>
                            </tr>
                            <tr>
                                <td>".$c_decodificador."</td>
                                <td>".$m_decodificador."</td>
                                <td>".$t_decodificador."</td>
                            </tr>
                            <tr>
                                <td>".$c_soporte."</td>
                                <td>".$m_soporte."</td>
                                <td>".$t_soporte."</td>
                            </tr>
                            <tr>
                                <td>".$c_base."</td>
                                <td>".$m_base."</td>
                                <td>".$t_base."</td>
                            </tr>
                        </tbod>
                    </table>
                </div>

                $mensaje
                Reenvía este correo a tu vendedor para que te realice una cotización formal.<br><br>Que tengas un excelente día.

            </div>
            <div class='fuera'>
                <p class='titulo2'>
                    <b>No responda a este correo.</b>
                    <br><br>
                    Correo enviado por el departamento de Ingeniería SYSCOM
                    <br>
                </p>
            </div>
        </div>
    </body>
</html>";

$para1 = "noe.ortega@syscom.mx";
$titulo1 = "Cálculo de Videowalls - Privado";
$cabeceras1  = "MIME-Version: 1.0"."\r\n";
$cabeceras1 .= "Content-type: text/html; charset=utf-8"."\r\n";
$cabeceras1 .= "From: Calculador de Videowalls <calculador-videowalls@syscom.mx>"."\r\n";
//$cabeceras .= 'Reply-to: '.$nombre_noti.' <'.$correo_noti.'>'."\r\n";