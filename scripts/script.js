var x=1;

function desbloquear()
{
     if($("#x_tamano_pantalla").val() == 46 || 55)
     {
        $("#x_tamano_horizontal").prop({"disabled":false})
        $("#x_tamano_vertical").prop({"disabled":false})
        $("#x_tipo_instalacion").prop({"disabled":false})
     }
     else
     {
        $("#x_tamano_horizontal").prop({"disabled":true})
        $("#x_tamano_vertical").prop({"disabled":true})
        $("#x_tipo_instalacion").prop({"disabled":true})
    }
}

function x_validar_uso()
{
    if($("#x_uso").val() == 1)
    {
        $("#x_div_camaras").show(500);
    }
    else
    {
        $("#x_div_camaras").css({"display":"none"});
    }
}

function x_mostrar_visual()
{
    var codigo = ""
    
    var tamano_horizontal = 0
    var tamano_vertical = 0
    var H = $("#x_tamano_horizontal").val()
    var V = $("#x_tamano_vertical").val()
    var claseCSS = "pantallaMenos10"
    var claseCSS2 = "gabineteMas10"

    if(H>10)
    {
        claseCSS = "pantallaMas10"
        claseCSS2 = "gabineteMas10"
    }
    else
    {
        claseCSS = "pantallaMenos10"
        claseCSS2 = "gabinete"
    }

    for(x=0; x<V; x++)
    {
        for(z=0; z<H; z++)
        {
            codigo+= "<div class='pantalla " + claseCSS + "'>" + $("#x_tamano_pantalla").val() + "</div>"
        }
        codigo+= "<div style='width: 100%; float: left;'></div>"
    }

    if($("#x_tamano_pantalla").val() == 46 && $("#x_tipo_instalacion").val() == 1)
    {
        tamano_horizontal = H*1.02
        tamano_vertical = V*.58+.8
        codigo+= montaje_piso(H, claseCSS, claseCSS2)
    }
    else if($("#x_tamano_pantalla").val() == 46)
    {
        tamano_horizontal = H*1.02
        tamano_vertical = V*.58
    }
    else if($("#x_tamano_pantalla").val() == 55 && $("#x_tipo_instalacion").val() == 1)
    {
        tamano_horizontal = H*1.21
        tamano_vertical = V*.68+.8
        codigo+= montaje_piso(H, claseCSS, claseCSS2)
    }
    else
    {
        tamano_horizontal = H*1.21
        tamano_vertical = V*.68
    }

    $("#x_visual").html(codigo)
    $("#x_medidas").html("<div style='float: left; width: 100%;'>Medida total horizontal: <b>" + tamano_horizontal.toFixed(2) + " m</b>, medida total vertical: <b>" + tamano_vertical.toFixed(2) + " m</b></div>")
}

function montaje_piso(_H, _claseCSS, claseCSS2)
{
    var codigo = ""
    for(z=0; z<_H; z++)
    {
        codigo+= "<div class='gabinete " + _claseCSS + " " + claseCSS2 + "'></div>"
    }
    codigo+= "<div style='width: 100%; float: left;'></div>"
    return codigo
}

function x_cerrar_ejemplo()
{
    $("#tamano_videowall").html("");
    $("#tipo_inst").html("");
    $("#proyecto").html("");
}

function x_ayuda_tamano_videowall()
{
    var codigo = "";
    codigo+= ""+
    "<div class='x_div_ejemplo'>"+
        "<div class='x_btn_cerrar' onclick='x_cerrar_ejemplo()'><img src='imagenes/cerrar.png'></div>"+
        "<b>¿Cuáles son las medidas de un Videowall?</b>"+
        "<br><br>"+
        "<img style='width:100%' src='imagenes/tamanoVideowall.png'>"+
    "</div>";
    x_cerrar_ejemplo()
    $("#tamano_videowall").html(codigo)
}

function x_ayuda_tipo_instalacion()
{
    var codigo = "";
    codigo+= ""+
    "<div class='x_div_ejemplo'>"+
        "<div class='x_btn_cerrar' onclick='x_cerrar_ejemplo()'><img src='imagenes/cerrar.png'></div>"+
        "<b>¿Cuáles son los tipos de instalación que existen?</b>"+
        "<br><br>"+
        "<img src='imagenes/tipoInstalacion.png' style='width:100%;'>"
    "</div>";
    x_cerrar_ejemplo()
    $("#tipo_inst").html(codigo);
}

function x_guardar()
{
    if(x_validar() == true)
    {
        $("#x_esperar").html("<img src='imagenes/esperar.gif' style='width:34px; position:absolute; margin-left:50%; left:-17px'>");
        $("#x_guardar").css({"display":"none"});
        $.post("funciones/calcular.php", 
        {
            tamano_pantalla: $("#x_tamano_pantalla").val(),
            tipo_instalacion: $("#x_tipo_instalacion").val(),
            tamano_horizontal: $("#x_tamano_horizontal").val(),
            tamano_vertical: $("#x_tamano_vertical").val(),
            uso: $("#x_uso").val(),
            cantidad_camaras: $("#x_cantidad_camaras").val(),
            cliente: $("#x_cliente").val(),
            nombre: $("#x_nombre").val(),
            correo: $("#x_correo").val(),
            vendedor: $("#x_vendedor").val(),
            recaptcha: $("#g-recaptcha-response").val()
        }, 
        function(resultado)
        {
            switch(parseInt(resultado))
            {
                case 1:
                {
                    alert("La recomendación de equipos fue enviada a su correo electrónico.");
                    location.reload();
                }
                break;
                case -1:
                {
                    alert("Se produjo un error inesperado, por favor contacte al administrador.\n\nError: " + resultado);
                }
                break;

                case -2:
                {
                    alert("Error al validar reCAPTCHA, su dirección IP fue agregada a la lista de investigación.\n\nPor favor espere un momento para validar otro.");
                }
                break;
            }
        });
    }
}

function x_validar()
{
    var resultado = 0;

    var arreglo = ["x_tamano_pantalla","x_tipo_instalacion","x_tamano_horizontal","x_tamano_vertical","x_uso","x_nombre","x_cliente"];
    for(x=0; x<arreglo.length; x++)
    {
        var id = "#" + arreglo[x];
        if($(id).val() == "")
        {
            $(id).css({"border-color":"#ff0000"});
            resultado++;
        }
        else
        {
            $(id).css({"border-color":"rgb(169, 169, 169)"});
        }
    }

    if($("#x_uso").val() == 2 && $("#x_color").val() == 0)
    {
        $("#x_uso").css({"border-color":"#ff0000"});
        resultado++;
    }
    else
    {
        if($("#x_uso").val() == "")
        {
            $("#x_uso").css({"border-color":"#ff0000"});
            resultado++;
        }
        else
        {
            $("#x_uso").css({"border-color":"rgb(169, 169, 169)"});
        }
    }

    if($("#g-recaptcha-response").val() == "")
    {
        resultado++;
        $("#x_captcha").css({"background":"red","border-radius":"7px"});
    }
    else
    {
        $("#x_captcha").css({"background":"none","border-radius":"none"});
    }

    var correo = $("#x_correo").val();
    if(correo.indexOf('@') == -1 || correo.indexOf('.') == -1)
    {
        $("#x_correo").css({"border-color":"#ff0000"});
        resultado++;
    }
    else
    {
        $("#x_correo").css({"border-color":"rgb(169, 169, 169)"});
    }

    if(resultado>0)
    {
        return false;
    }
    else
    {
        return true;
    }
}