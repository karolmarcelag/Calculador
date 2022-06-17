<?php

/*$nombre = "Xavier Guereque";
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
$precio_de_lista = "$30,006.90";*/

$mensaje = "";

$nombre_noti = "Xavier Guereque";
$correo_noti = "xavier.guereque@syscom.mx";

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
                A continuación se muestra el cálculo de un Videowall realizado por un nuevo cliente.
                <br><br>
                Nombre de cliente: <b>$nombre</b>."."<br>Número de cliente: <b>$cliente</b>."."<br>Correo de contacto: <b>$correo</b>."."<br>Vendedor: <b>$vendedor</b>.<br><br>
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
                                <td>".$H."</td>
                                <td>".$V."</td>
                                <td>".$tamano_horizontal."</td>
                                <td>".$tamano_vertical."</td>
                                <td>".$uso."</td>"
                                if ($uso == 1)
                                {
                                    "<td>".$cantidad_camaras."</td>"
                                }
                            "</tr>
                        </tbod>
                    </table>
                </div>
                
                <div class='tabla'>
                    <table>
                    <caption>Componentes + 1 Pantalla</caption>
                        <thead>
                            <tr>"
                                if($tipo_instalacion == 1)
                                {
                                    "<th>Base Piso</th>"
                                }
                                "<th>Soporte Pantalla</th>
                                <th>Pantalla</th>
                                <th>".$j11."</th>
                                <th>Decodificador</th>
                                <th>FOB</th>
                                <th>Arancel (15% Pantallas)</th>
                                <th>Subtotal</th>
                                <th>Flete (10%)</th>
                                <th>Total landing</th>
                                <th>Factor 2.8</th>
                            </tr>
                        </thead>
                        <tbod>
                            <tr>"
                                if($tipo_instalacion == 1)
                                {
                                    "<td>".$base_piso."</td>"
                                }
                                "<td>".$soporte_pantalla."</td>
                                <td>".$pantalla."</td>"
                                "<td>".$valor_j11."</td>"
                                "<td>".$fob."</td>
                                <td>".$arancel."</td>
                                <td>".$subtotal."</td>
                                <td>".$flete."</td>
                                <td>".$total_landing."</td>
                                <td>".$factor."</td>
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
                
                <div class='tabla'>
                    <table style='margin-bottom: 0px;'>
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
                                <td>Pantalla</td>
                                <td>".$modelo_pantalla."</td>
                                <td>".$cantidad_pantalla."</td>
                            </tr>
                            <tr>
                                <td>".$j11."</td>
                                <td>".$modelo_j11."</td>
                                <td>".$cantidad_j11."</td>
                            </tr>
                            <tr>
                                <td>Soporte Pantalla</td>
                                <td>".$modelo_soporte_pantalla."</td>
                                <td>".$cantidad_soporte_pantalla."</td>
                            </tr>
                            <tr>"
                                if($tipo_instalacion == 1)
                                {
                                    "<td>Base de Piso</td>
                                    <td>".$modelo_base_piso."</td>
                                    <td>".$cantidad_base_piso."</td>"
                                }
                            "</tr>
                        </tbod>
                    </table>
                </div>
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