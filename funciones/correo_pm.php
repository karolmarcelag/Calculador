<?php

$titulo = "Calcualdor de Videowalls";
$mensaje = "
<html>
    <head>
        <meta charset='utf-8'>
        <title>Calcualdor de Videowalls</title>
        <style>
            .cuerpo 
            {
                font-family: 'Arial', sans-serif;
                font-size:14px;
                background:#E6E6E6;
                color:#424242;
                width:100%;
                height:100%;
                top:0;
                left:0;
            }
            b
            {
                color:#000;
            }
            .titulo1,
            .titulo2 
            {
                text-align:center;
            }
            .tituloSolo
            {
                background: #E6E6E6;
                font-weight: bold;
            }
            .contenido
            {
                width:80%;
                margin-left:10%;
                background:#FFF;
                padding:8px;
                box-shadow: 3px 3px 6px #999;
                border: .5px solid #BDBDBD;
                line-height: 1.8
            }
            .fuera
            {
                width:80%;
                margin-left:10%;
                padding:8px;
            }
            .liga_noti
            {
                width: 60%;
                margin-left: 20%;
                height: 35px;
                border: none;
                background: #d2d2d2;
                color: #000;
                font-weight: bold;
            }
            img
            {
                width: 200px;
                margin-top: -15px;
                margin-bottom: -15px;
                margin-left: -15px;
            }
            .tabla
            {
                width: 90%;
            }
            .tabla table 
            {
                border-spacing: 0;
                font-size: 14px;
                margin-bottom: 25px;
            }
            .tabla table thead th,
            .tabla table tbody td, caption
            {
                border: 1px solid #000;
                padding: 5px;
                text-align: center;
            }
            caption 
            {
                color: #fff;
                background: #525252;
            }
            th 
            {
                background: #E6E6E6;
            }
        </style>
    </head>
    <body>
        <div class='cuerpo'>
            <div class='fuera'>
                <div><img src='https://ingenieria.syscom.mx/imagenes/logo-syscom.png'></div>
            </div>
            <div class='contenido'>
                A continuación se muestra el cálculo de un Videowall realizado por un nuevo cliente.
                <br><br>
                Nombre de cliente: <b>$nombre</b><br>
                Número de cliente: <b>$cliente</b><br>
                Correo de contacto: <b>$correo</b><br>";

                if($vendedor != "")
                {
                    $mensaje.=
                    "Vendedor: <b>$vendedor</b><br>";
                }
                
                $mensaje.=
                "<br>
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
                                <th>Uso</th>";
                                if ($uso == "Videovigilancia")
                                {
                                    $mensaje.= 
                                    "<th>Cant. de cám. simul.</th>";
                                }
                            $mensaje.=
                            "</tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$tamano_pantalla</td>
                                <td>$tipo_instalacion</td>
                                <td>$medida_horizontal</td>
                                <td>$medida_vertical</td>
                                <td>$tamano_horizontal</td>
                                <td>$tamano_vertical</td>
                                <td>$uso</td>";
                                if ($uso == "Videovigilancia")
                                {
                                    $mensaje.= "<td>$cantidad_camaras</td>";
                                }
                            $mensaje.=    
                            "</tr>
                        </tbody>
                    </table>
                </div>
                
                <div class='tabla'>
                    <table>
                    <caption>Componentes + 1 Pantalla</caption>
                        <thead>
                            <tr>";
                                if($tipo_instalacion == "piso")
                                {
                                    $mensaje.= "<th>Base Piso</th>";
                                }
                                $mensaje.= 
                                "<th>Soporte Pantalla</th>
                                <th>Pantalla</th>
                                <th>$j11</th>
                                <th>FOB</th>
                                <th>Arancel (15% Pantallas)</th>
                                <th>Subtotal</th>
                                <th>Flete (10%)</th>
                                <th>Total landing</th>
                                <th>Factor 2.8</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>";
                                if($tipo_instalacion == "piso")
                                {
                                    $mensaje.= "<td>$base_piso</td>";
                                }
                                $mensaje.= 
                                "<td>$soporte_pantalla</td>
                                <td>$pantalla</td>
                                <td>$valor_j11</td>
                                <td>$fob</td>
                                <td>$arancel</td>
                                <td>$subtotal</td>
                                <td>$flete</td>
                                <td>$total_landing</td>
                                <td>$factor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class='tabla'>
                    <table>
                        <tbody>
                            <tr>
                                <td class='tituloSolo'>Modelo</td>
                                <td><b>$modelo</b></td>
                            </tr>
                            <tr>
                                <td class='tituloSolo'>Precio de Lista</td>
                                <td><b>$precio_de_lista</b></td>
                            </tr>
                        </tbody>
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
                        <tbody>
                            <tr>
                                <td>Pantalla</td>
                                <td>$modelo_pantalla</td>
                                <td>$cantidad_pantalla</td>
                            </tr>
                            <tr>
                                <td>$j11</td>
                                <td>$modelo_j11</td>
                                <td>$cantidad_j11</td>
                            </tr>
                            <tr>
                                <td>Soporte Pantalla</td>
                                <td>$modelo_soporte_pantalla</td>
                                <td>$cantidad_soporte_pantalla</td>
                            </tr>";
                            if($tipo_instalacion == "piso")
                            {
                                $mensaje.= 
                                "<tr>
                                    <td>Base de Piso</td>
                                    <td>$modelo_base_piso</td>
                                    <td>$cantidad_base_piso</td>
                                </tr>";
                            }
                            $mensaje.=
                            "</tr>
                        </tbody>
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

$para = "noe.ortega@syscom.mx";
$titulo = "Calculador de Videowalls";
$cabeceras  = "MIME-Version: 1.0"."\r\n";
$cabeceras .= "Content-type: text/html; charset=utf-8"."\r\n";
$cabeceras .= "From: Calculador de Videowalls <calculador-videowalls@syscom.mx>"."\r\n";

mail($para,'=?UTF-8?B?'.base64_encode($titulo).'?=', $mensaje,$cabeceras);