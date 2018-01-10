<?php
/**
 * Created by PhpStorm.
 * User: Aru-kun
 * Date: 10/01/2018
 * Time: 18:49
 */
?>
<html class=" js canvas canvastext geolocation crosswindowmessaging websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface"><head>
    <title>Salon del comic de sevilla</title>
    <meta name="description" content="Salon del Comic y Cultura Asiática de Sevilla - 1, 2, 3, 4, 5, 6 y 7 de diciembre de 2018">
    <meta name="keywords" content="salon videojuegos cultura japonesa asiática sevilla fibes musica cosplay concursos torneos karaoke">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta property="og:image" content="http://mangafest.es/2015/images/logo_fb2.png">
    <link rel="stylesheet" type="text/css" href="css/style.css?28oct">
    <!-- modernizr enables HTML5 elements and feature detects -->
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.kwicks.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style type="text/css">
        .kwicks {
            width: 100%;
            /*height: 300px;*/
            height: 300px;

        }
        .kwicks > li {
            width: 100%;
            /* overridden by kwicks but good for when JavaScript is disabled */
            /*height: 300px;*/
            height: 200px;
            margin-top: 5px;
        }


        #punto1{
            position: relative;
            top: -240px;
            left: 10px;
            float: left;
            clear: both;
            transition: 1s;
            cursor: pointer;
        }
        #punto2{
            position: relative;
            top: -220px;
            left: 10px;
            float: left;
            clear: both;
            transition: 1s;
            cursor: pointer;
        }
        #punto3{
            position: relative;
            top: -200px;
            left: 10px;
            float: left;
            clear: both;
            transition: 1s;
            cursor: pointer;
        }
        #punto4{
            position: relative;
            top: -180px;
            left: 10px;
            float: left;
            clear: both;
            transition: 1s;
            cursor: pointer;
        }
    </style>

    <script>
        function quedan(){
            var apertura = 1512133200*1000;
            var d = new Date();
            var n = d.getTime();
            var diferencia = (apertura - n)/1000;
            var dias = Math.floor(diferencia/(60*60*24));
            $("#quedan_dias").html(dias);
            var horas = Math.floor((diferencia%(60*60*24))/(60*60));
            $("#quedan_horas").html(horas);
//        console.log((diferencia%(60*60*24));
            var minutos = Math.floor((diferencia%(60*60*24))%(60*60));
            $("#quedan_minutos").html(minutos);
            var minutos = Math.floor((diferencia%(60*60*24))%(60*60)/60);
            $("#quedan_minutos").html(minutos);
            var segundos = Math.floor((diferencia%(60*60*24))%(60*60)%60);
            $("#quedan_segundos").html(segundos);
        }
        $(function(){
            //quedan();
            setInterval(function(){
                //quedan();
            }, 1000);
        });
    </script>

</head>

<body>
<div id="main">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-33793157-1', 'auto');
        ga('send', 'pageview');

    </script>

    <div style="background-color: #1b3881; height: 10px;"></div>
    <header style="width: 900px; margin: auto;">
        <div id="logo">
            <a href="inicio"><img src="DSM/mangafest.png"></a>
        </div>
        <div style="font-family: 'Roboto'; font-size: 28px; margin-left: 170px; padding-top: 50px; color: #1b3881; font-weight: bold;">
            Salon del Comic y Cultura Asiática de Sevilla
        </div>
        <div style="font-family: 'Roboto'; font-size: 14px; margin-left: 170px; padding-top: 5px; color: #1b3881;">
            1, 2 y 3, 4, 5, 6 y 7 de diciembre de 2018 - Palacio de Congresos y Exposiciones de Sevilla
        </div>


    </header>

    <div style="background-color: #1b3881; height: 39px; padding-top: 3px;">

    </div>
    <style>
        #bloque_redes img{
            display: block;
            width: 30px;
        }

    </style>

    <div id="bloque_redes" style="position: fixed; right:0px; top: 28px; z-index: 90;">
        <a href="https://www.facebook.com/mangafestSP" target="_blank"><img style="" src="images/socialicon/fb.png"></a>
        <a href="http://twitter.com/mangafest" target="_blank"><img style="display: none !important;" src="images/socialicon/twitter.png"></a>
        <a href="https://www.instagram.com/mangafest" target="_blank"><img style="display: none !important;" src="images/socialicon/instagram.png"></a>
        <a href="https://www.youtube.com/c/BestWayGroupSP" target="_blank"><img style="display: none !important;" src="images/socialicon/youtube.png"></a>
    </div>

    <script>
        function aceptarCookies(){
            $.get("acepta_cookies.php", null, function(){
                $("#aviso_cookies").css("display", "none");
            });
        }
        $(function(){
            $("#aviso_cookies").css("display", "block");

        });
    </script>

    <div id="aviso_cookies" style="background-color: white; position: fixed; bottom: 0px; border: 3px solid gray; padding: 10px; margin: 2px; right: 0px; left: 0px; z-index: 999; font-size: 13px; display: block;">

        <button onclick="aceptarCookies();" style="float: right; border: 1px solid black; padding: 5px;">Aceptar</button>

        Utilizamos cookies propias y de terceros
        para mejorar nuestros servicios. Si continúa
        navegando, consideramos que acepta su
        uso.</div>




    <a class="noticias" id="noticia" href="noticia/52/concurso-de-chibicosplay-el-concurso-para-los-mas-peques-de-la-casa" style="background-image: url(&quot;./images/noticias/52.jpg?aa&quot;); width: 100%; height: 300px; position: relative; background-size: cover; background-position: center center; display: block; text-decoration: none; transition: 1s;">
        <div style="width: 900px; margin: auto; padding-top: 200px;">
            <div style="border: 3px solid white; background-color: 	rgba(27, 56, 129, 0.8); width: 600px; height: 50px; margin-left: 250px; color: white; font-size: 22px; padding: 10px; box-shadow: black 10px 10px 20px; position: relative; margin-left: 5px;">
                <div id="noticia_titulo" style="font-family: Roboto;">Concurso de ChibiCosplay: el concurso para los más peques de la casa</div>
                <div id="noticia_fecha" style="font-size: 14px; position: absolute; bottom: 10px; right: 10px;">8 de noviembre, 12:00</div>
            </div>
        </div>
    </a>

    <img onclick="cargarNoticiaManual(1);" id="punto1" src="images/punto_azul.png">
    <img style="" onclick="cargarNoticiaManual(2);" id="punto2" src="images/punto_azul.png">
    <img style="" onclick="cargarNoticiaManual(3);" id="punto3" src="images/punto_azul.png">
    <img style="" onclick="cargarNoticiaManual(4);" id="punto4" src="images/punto_blanco.png">

    <script>
        var noticias;
        $.getJSON("noticias_json.php", {}, function(data){
            noticias = data;
            for(var i=2; i<=noticias.length; i++){
                $("#punto"+i).show();
            }
        });
        var contador_noticias = 0;
        var anterior_punto = 1;

        function cargarNoticiaManual(id){
            contador_noticias = id-1;
            clearInterval(interval_noticias);
            cargarNoticia();
            interval_noticias = setInterval(function(){
                //console.log("dos");
                cargarNoticia();
            }, 5000);

        }

        function cargarNoticia(){
            $("#noticia").css("background-image", "url('./images/noticias/"+noticias[contador_noticias].id+".jpg?aa')");
            $("#noticia_titulo").html(noticias[contador_noticias].titulo);
            $("#noticia_fecha").html(noticias[contador_noticias].fecha);
            $("#noticia").attr("href", "noticia/"+noticias[contador_noticias].id+"/"+noticias[contador_noticias].url);
            $("#punto"+anterior_punto).attr("src", "images/punto_azul.png");
            $("#punto"+(contador_noticias+1)).attr("src", "images/punto_blanco.png");
            anterior_punto = contador_noticias+1;
            if(contador_noticias==noticias.length-1){
                contador_noticias = 0;
            }else{
                contador_noticias++;
            }

        }


        var interval_noticias = setInterval(function(){
            //console.log("uno");
            cargarNoticiaManual(2);
        }, 5000);

    </script>

    <div style="background-color: white; height: 20px;"></div>



    <div id="cuenta_atras" style="text-align: center; font-size: 25px; font-weight: bold; background-color: #1b3881; color: white; padding: 30px;">
        <img src="images/reloj2.png" style="vertical-align:middle; height: 120px;"> Quedan <span id="quedan_dias">0</span> días, <span id="quedan_horas">0</span> horas, <span id="quedan_minutos">0</span> minutos y <span id="quedan_segundos">0</span> segundos.
    </div>

    <div style="background-color: white; height: 20px;"></div>





    <div style="background-color: #1b3881; padding-bottom: 20px;">

        <div id="site_content">



            <div id="content_izq" class="noticias_bloque bloque_azul">
                <h3>Más noticias</h3>
                <div class="titulo"><a href="noticia/50/todavia-no-has-visto-nuestros-divertidos-sketches">¿Todavía no has visto nuestros divertidos «sketches»?</a> <span>| 7 nov, 2017</span></div>
                <div class="titulo"><a href="noticia/48/riete-haz-amigos-y-enamorate-en-mangafest">¡Ríete, haz amigos y enamórate en Mangafest!</a> <span>| 5 nov, 2017</span></div>
                <div class="titulo"><a href="noticia/46/mangafest-2017-te-presenta-a-su-lista-de-asociaciones">Mangafest 2017 te presenta a su lista de asociaciones</a> <span>| 4 nov, 2017</span></div>
                <div class="titulo"><a href="noticia/43/mangafest-2017-te-trae-el-concurso-karaokevision">Mangafest 2017 te trae el Concurso Karaokevision</a> <span>| 3 nov, 2017</span></div>
                <div class="titulo"><a href="noticia/42/ya-tenemos-a-los-participantes-del-concurso-cosmascotas">¡Ya tenemos a los participantes del concurso CosMascotas!</a> <span>| 2 nov, 2017</span></div>
                <div style="float: right; font-weight: bold;"><a href="noticias">Ver más...</a></div>
            </div>

            <div id="content_central" class="bloque_azul">
                <h3>Encuesta</h3>
                <script>

                    $(function(){
                        $("#encuesta_respuestas input").click(function(){
                            //Enviar respuesta
                            valor = $(this).val();
                            //console.log("valor: "+valor);

                            $.get("enviar_encuesta.php", {e: 8, n: valor});

                            $("#encuesta_resultado").css("display", "block");
                            $("#encuesta_respuestas").animate({opacity: "0"}, 500);
                            $("#encuesta_resultado").animate({opacity: "100"}, 4000);
                        });
                    });
                </script>
                <div id="encuesta_titulo">
                    ¡Volvamos a los 80! ¿Cuál anime era tu perdición?
                </div>
                <div id="encuesta_respuestas" style="">
                    <input type="radio" name="encuesta" value="4"> Dragon Ball.<br>
                    <input type="radio" name="encuesta" value="3"> Ranma 1/2.<br>
                    <input type="radio" name="encuesta" value="2"> Caballeros del Zodiaco.<br>
                    <input type="radio" name="encuesta" value="1"> Otro... ¡Cuéntanos en nuestras redes sociales!<br>

                </div>
                <div id="encuesta_resultado" style="opacity: 0; display: none; position: relative; top: -60px; ">¡Gracias por participar!</div>
            </div>

            <div style="float: right; margin-top: 10px;">
                <div id="content_central" class="bloque_azul" style="margin-top: 0px;">
                    <div style="padding: 10px;">

                        <h3 style="margin-bottom: 3px;">Estado venta entradas</h3>

                        <div style="padding-bottom: 1px; padding-top: 0px; font-size: 10px;">Entradas de viernes:</div>
                        <div style="border: 1px solid black; width: 100%; background-color: white; height: 20px;">
                            <div id="barra_viernes" style="background-color: red; width: 34%; height: 100%; white-space: nowrap;"><div style="color: black; padding-top: 2px; padding-left: 5px; opacity: 1;"><span>34</span>% vendidas</div></div>
                        </div>

                        <div style="padding-bottom: 1px; padding-top: 5px; font-size: 10px;">Entradas de sábado:</div>
                        <div style="border: 1px solid black; width: 100%; background-color: white; height: 20px;">
                            <div id="barra_sabado" style="background-color: green; width: 100%; height: 100%; white-space: nowrap;"><div style="color: black; padding-top: 2px; padding-left: 5px; opacity: 1;"><span>100</span>% vendidas</div></div>
                        </div>

                        <div style="padding-bottom: 1px; padding-top: 5px;  font-size: 10px;">Entradas de domingo:</div>
                        <div style="border: 1px solid black; width: 100%; background-color: white; height: 20px;">
                            <div id="barra_domingo" style="background-color: orange; width: 54%; height: 100%; white-space: nowrap;"><div style="color: black; padding-top: 2px; padding-left: 5px; opacity: 1;"><span>54</span>% vendidas</div></div>
                        </div>

                        <div style="padding-bottom: 1px; padding-top: 5px; font-size: 10px;">Entradas Premium:</div>
                        <div style="border: 1px solid black; width: 100%; background-color: white; height: 20px;">
                            <div id="barra_premium" style="background-color: blue; width: 100%; height: 100%; white-space: nowrap;"><div style="color: black; padding-top: 2px; padding-left: 5px; opacity: 1;"><span>100</span>% vendidas</div></div>
                        </div>

                        <div style="font-size: 10px; margin-top: 3px; padding-top: 3px;">Datos aproximados, la información puede mostrarse con cierta demora.</div>

                    </div>

                    <script>
                        $(function(){

                            $.getJSON("obtener_estado_venta.php", null, function(data){
                                //console.log(data);
                                $("#barra_viernes").animate({width: data.v+"%"}, 2000, function(){ $("#barra_viernes>div").animate({opacity: 1}, 1000); });
                                $("#barra_viernes span").html(data.v);
                                $("#barra_sabado").animate({width: data.s+"%"}, 2000, function(){ $("#barra_sabado>div").animate({opacity: 1}, 1000); });
                                $("#barra_sabado span").html(data.s);
                                $("#barra_domingo").animate({width: data.d+"%"}, 2000, function(){ $("#barra_domingo>div").animate({opacity: 1}, 1000); });
                                $("#barra_domingo span").html(data.d);
                                $("#barra_premium").animate({width: data.premium+"%"}, 2000, function(){ $("#barra_premium>div").animate({opacity: 1}, 1000); });
                                $("#barra_premium span").html(data.premium);
                            })
                        });
                    </script>




                </div>
            </div>


        </div>

    </div>




    <footer style="min-height: 111px;">





        <div id="anteriores_eventos">
            Anteriores eventos:
            <ul>
                <li> <a href="http://mangafest.es/2016" target="_blank">Mangafest 2016</a></li>
                <li> <a href="http://mangafest.es/2015" target="_blank">Mangafest 2015</a></li>
                <li> <a href="http://mangafest.es/2014" target="_blank">Mangafest 2014</a></li>
                <li> <a href="http://mangafest.es/2013" target="_blank">Mangafest 2013</a></li>
                <li> <a href="http://mangafest.es/2012" target="_blank">Mangafest 2012</a></li>



            </ul>
        </div>
        <p style="margin-top: 26px;">Copyright © Mangafest 2017<br>
            <a href="https://www.facebook.com/mangafestSP" target="_blank" style="color: #3B5998;">Facebook</a> | <a href="http://twitter.com/mangafest" target="_blank" style="color: #30D8F0;">Twitter</a> | <a href="http://youtube.com/BestwaygroupSP" target="_blank" style="color: #DB4538;">Youtube</a> | <a href="https://www.instagram.com/mangafest" target="_blank" style="color: #d71a9a;">Instagram</a>
            <br>
            Mangafest se reserva el derecho de modificar parcial o totalmente el contenido e información de esta web sin previo aviso. Información válida salvo error u omisión.</p>
    </footer>



    <div style="background-color: #1b3881; height: 10px;"></div>


    <!--


    <div style="border: 3px solid white; position: fixed; bottom: -150px; right: 15px; width: 270px; height: 120px; background-color: white; padding: 10px; padding-top: 0px; opacity: 0; background-image: url('./images/fondo_gf.png'); color: white;" id="aviso">
        <div style="text-align: right; padding-top: 5px; cursor: pointer;"><span id="aviso_cerrar" onclick="cerrarAviso();">Cerrar</span></div>
        <div style="font-size: 17px; font-weight: bold; text-align: center; margin-top: 8px;">¿Eres más de videojuegos?</div>
        <div style="padding-top: 5px; text-align: justify; margin-top: 5px;"><span style="font-weight: bold;">Gamingfest</span> es tu sitio. Haz clic <a style="color: white; font-weight: bold;" href="http://gamingfest.es" target="_blank">aquí</a> para más información.</div>
    </div>
    -->
    <script>

        $(function(){
            setTimeout(function(){
                var alto_aviso = "15px";
                alto_aviso = "70px";
                $("#aviso").animate({
                    opacity: "1",
                    bottom: alto_aviso
                }, 2000, null);
            }, 3000);
        });
        function cerrarAviso(){
            $.get("cierra_aviso.php", null, function(){
                $("#aviso").css("display", "none");
            });
        }

    </script>






</div>

<!-- javascript at the bottom for fast page loading -->

<script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
<script type="text/javascript" src="js/jquery.sooperfish.js"></script>
<script type="text/javascript" src="js/jquery.kwicks.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.kwicks').kwicks({
            minSize : 30,
            spacing : 3,
            behavior: 'menu',
            isVertical: true,
            behavior: 'slideshow',
            interval: 5000
        });
        $('ul.sf-menu').sooperfish({
            dualColumn  : 7
        });
    });
</script>



</body></html>punto1" src="images/punto_azul.png">