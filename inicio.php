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

    <style>
        #pagina {
            background-color: #cccccc;
        }

        header {
            background-color: #ffffcc;
        }

        footer {
            background-color: #ffffcc;
            clear: both;
        }

        nav {
            /* background-color: #ffccff; */
        }

        section {
            background-color: #ccffff;
            width: 500px;
            float: left;
            padding-top: 5px;
            padding-right: 5px;
            padding-bottom: 5px;
            padding-left: 5px;  -moz-column-count: 2;
            -webkit-column-count: 2;
            column-count: 2;  -moz-column-rule: 5px solid #66cccc;
            -webkit-column-rule: 5px solid #66cccc;
            column-rule: 5px solid #66cccc;
        }

        aside {
            background-color: #ccccff;
            margin-left: 510px;
        }

        div {
            width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        #separacion{
            height: 0px;
        }


        nav ul {
            list-style-type: none;
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        nav li {
            width: 150px;
            text-align: center;
            float: left;
        }

        .submenu {
            display: none;
        }

        #menu > li:hover > ul {
            display: block;
        }

        #menu {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0px;
        }

        .sinflotar {
            clear: both;
            margin-top: 29px;
        }

        nav a {
            text-decoration: none;
            font-weight: bold;
            font-family: "Arial", "Helvetica", "sans-serif";
            font-size: 16px;
            line-height: 30px;
            color: white;
            background-color: red;
            display: block;
        }

        nav a:hover {
            background-color: #993300;
        }

        nav {
            z-index: 5;
            top: 28px;
            position: absolute;
            width: 800px;
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

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>

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



    <div style="background-color: #1b3881; height: 10px;"></div>


    <!--


    <div style="border: 3px solid white; position: fixed; bottom: -150px; right: 15px; width: 270px; height: 120px; background-color: white; padding: 10px; padding-top: 0px; opacity: 0; background-image: url('./images/fondo_gf.png'); color: white;" id="aviso">
        <div style="text-align: right; padding-top: 5px; cursor: pointer;"><span id="aviso_cerrar" onclick="cerrarAviso();">Cerrar</span></div>
        <div style="font-size: 17px; font-weight: bold; text-align: center; margin-top: 8px;">¿Eres más de videojuegos?</div>
        <div style="padding-top: 5px; text-align: justify; margin-top: 5px;"><span style="font-weight: bold;">Gamingfest</span> es tu sitio. Haz clic <a style="color: white; font-weight: bold;" href="http://gamingfest.es" target="_blank">aquí</a> para más información.</div>
    </div>
    -->

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
<script>

    /*
* Slider
* Visit http://createjs.com/ for documentation, updates and examples.
*
* Copyright (c) 2010 gskinner.com, inc.
*
* Permission is hereby granted, free of charge, to any person
* obtaining a copy of this software and associated documentation
* files (the "Software"), to deal in the Software without
* restriction, including without limitation the rights to use,
* copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the
* Software is furnished to do so, subject to the following
* conditions:
*
* The above copyright notice and this permission notice shall be
* included in all copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
* EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
* OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
* NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
* HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
* WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
* FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
* OTHER DEALINGS IN THE SOFTWARE.
*/

    (function() {

        /**
         * Simple slider control for EaselJS examples.
         **/
        function Slider(min, max, width, height) {
            this.Shape_constructor();

            // public properties:
            this.min = this.value = min||0;
            this.max = max||100;

            this.width = width||100;
            this.height = height||20;

            this.values = {};

            this.trackColor = "#EEE";
            this.thumbColor = "#666";

            this.cursor = "pointer";
            this.on("mousedown", this._handleInput, this);
            this.on("pressmove", this._handleInput, this);
        }
        var p = createjs.extend(Slider, createjs.Shape);


// public methods:
        p.isVisible = function() { return true; };

        p.draw = function(ctx, ignoreCache) {
            if (this._checkChange()) {
                var x = (this.width-this.height) * Math.max(0,Math.min(1,(this.value-this.min) / (this.max-this.min)));
                this.graphics.clear()
                    .beginFill(this.trackColor).drawRect(0,0,this.width,this.height)
                    .beginFill(this.thumbColor).drawRect(x,0,this.height, this.height);
            }
            this.Shape_draw(ctx, true);
        };


// private methods:
        p._checkChange = function() {
            var a = this, b = a.values;
            if (a.value !== b.value || a.min !== b.min || a.max !== b.max || a.width !== b.width || a.height !== b.height) {
                b.min = a.min;
                b.max = a.max;
                b.value = a.value;
                b.width = a.width;
                b.height = a.height;
                return true;
            }
            return false;
        };

        p._handleInput = function(evt) {
            var val = (evt.localX-this.height/2)/(this.width-this.height)*(this.max-this.min)+this.min;
            val = Math.max(this.min, Math.min(this.max, val));
            if (val == this.value) { return; }
            this.value = val;
            this.dispatchEvent("change");
        };


        window.Slider = createjs.promote(Slider, "Shape");
    }());

</script>

</body></html>punto1" src="images/punto_azul.png">