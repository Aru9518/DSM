<html>
<head>
    <link  rel="stylesheet" type="text/css" href="Estilos/quienes_somos_estilo.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Quienes Somos </title>
    <canvas id="titulo" width="970" height="75" >
        Your browser does not support the HTML5 canvas tag.</canvas>
    <script>
        var c = document.getElementById("titulo");
        var ctx = c.getContext("2d");
        //ctx.font = "bold 28px Arial";
        //ctx.strokeStyle='black';
        //ctx.fillStyle="black";
        //ctx.strokeText("XXI Salón Internacional del Cómic de Sevilla",10,50);
        ctx.font="bold 30pt 'Indie Flower', cursive";
        ctx.lineWidth='1';
        ctx.strokeStyle='red';
        ctx.fillStyle="black";
        ctx.fillText("XXI Salón Internacional del Cómic de Sevilla",50,50);
        ctx.strokeText("XXI Salón Internacional del Cómic de Sevilla",50,50);
    </script>
</head>

<nav>
    <ul id="menu">
        <li><a href="#">Inicio</a>
        </li>
        <li><a href="#">Información General</a>
            <ul class="submenu">
                <li><a href="#">¿Cómo llegar?</a></li>
                <li><a href="#">Sobre la Ciudad</a></li>
                <li><a href="#">Quienes somos</a></li>
            </ul>
        </li>
        <li><a href="#">Programación</a>
            <ul class="submenu">
                <li><a href="#"> Lunes </a></li>
                <li><a href="#"> Martes </a></li>
                <li><a href="#"> Miercoles </a></li>
                <li><a href="#"> Jueves </a></li>
                <li><a href="#"> Viernes </a></li>
                <li><a href="#"> Sabado </a></li>
                <li><a href="#"> Domingo </a></li>
            </ul>
        </li>
        <li><a href="#">Comics</a>
            <ul class="submenu">
                <li><a href="#">Gore</a></li>
                <li><a href="#">Acción</a></li>
                <li><a href="#">Romance</a></li>
                <li><a href="#">Estadísticas</a></li>
            </ul>
        </li>
        <li><a href="#">Invitados</a>
            <ul class="submenu">
                <li><a href="#">Eichiro Oda</a></li>
                <li><a href="#">Masashi Kishimoto</a></li>
                <li><a href="#">Akira Toriyama</a></li>
                <li><a href="#">Alan Moore</a></li>
                <li><a href="#">Gosho Aoyama</a></li>
                <li><a href="#">Stan Lee</a></li>
            </ul>
        </li>
        <li><a href="#">Galeria</a>
            <ul class="submenu">
                <li><a href="#">Fotos</a></li>
                <li><a href="#">Videos</a></li>
            </ul>
        </li>
    </ul>
</nav>

<body>
<table>
    <tr><td>
            <section>
                <h2> ¡Bienvenido! </h2>
                <p> Somos una organización</p>
            </section>

            <section>
                <h2> Stands </h2>
                <p>
                    Solicita ya la información para contratar un stand en el XXI Salón del Cómic de Sevilla. Rellena el siguiente formulario y nuestros comerciales contactarán contigo con la mayor brevedad posible.
                    En caso de no haber espacios disponibles, entrarás en nuestra lista de espera para futuras ediciones. ¡Te esperamos!
                </p>

                <form action="Concurso.php" method="post" style="text-align: center">
                    <label> Nombre </label>
                    <input type="text" name="Nombre" required>
                    <br>
                    <label> Apellidos </label>
                    <input type="text" name="Apellidos" required>
                    <br>
                    <label> Correo </label>
                    <input type="email" name="Email" required>
                    <br>
                    <label> Telefono </label>
                    <input type="tel" name="Telefono" required>
                    <br>
                    <label> Concurso </label>
                    <select name="Stand">
                        <option name="Comercial" value="Concurso1">Comercial</option>       <!-- Introducir aquí el nombre del primer concurso y así sucesivamente en las siguientes líneas. Para añadir más concursos copiar y pegar código  -->
                        <option name="Restauracion" value="Concurso2">Restauracion</option>
                        <option name="Artesano" value="Concurso3">Comercial</option>
                        <option name="No Comercial" value="Concurso4">No Comercial</option>
                    </select>
                    <br>
                    <input type="submit" name="enviar" value="Enviar">
                </form>
            </section>
        </td></tr>

</table>

</body>
</html>

<?php
try{
    $base = new PDO('mysql:host=localhost; dbname=dsm', 'root','');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch (Exception $e){
    die('Error: '.$e->GetMessage());
}


if(isset($_POST['enviar'])){
    $sql_info = "INSERT INTO Stand (nombre, apellidos, correo, telefono, tipo) VALUES (:nombre, :apellidos, :correo, :telefono, :tipo)";
    $resultado = $base->prepare($sql_info);
    $resultado->bindParam(':nombre', $_POST['Nombre'], PDO::PARAM_STR);
    $resultado->bindParam(':apellidos', $_POST['Apellidos'], PDO::PARAM_STR);
    $resultado->bindParam(':correo', $_POST['Email'], PDO::PARAM_STR);
    $resultado->bindParam(':telefono', $_POST['Telefono'], PDO::PARAM_INT);
    $resultado->bindParam(':tipo', $_POST['Stand'], PDO::PARAM_STR);
    try {
        $resultado->execute();
    }catch(Exception $e){
        die($e->getMessage());
    }
    $id_session = $base->lastInsertId();
    $resultado->closeCursor();
}


?>
