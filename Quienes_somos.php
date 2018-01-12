<html>
<head>
    <link  rel="stylesheet" type="text/css" href="Estilos/quienes_somos_estilo.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> Quienes Somos </title>
</head>

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

                <form action="Quienes_somos.php" method="post" style="text-align: center">
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
                    <label> Stand </label>
                    <select name="Stand">
                        <option name="Comercial" value="Comercial">Comercial</option>
                        <option name="Restauracion" value="Comercial">Restauracion</option>
                        <option name="Artesano" value="Artesano">Comercial</option>
                        <option name="No Comercial" value="No Comercial">No Comercial</option>
                    </select>
                    <br>
                    <label> Comentario </label>
                    <input type="text" name="Comentario" >
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
    $sql_info = "INSERT INTO Stand (nombre, apellidos, correo, telefono, tipo, comentario) VALUES (:nombre, :apellidos, :correo, :telefono, :tipo, :comentario)";
    $resultado = $base->prepare($sql_info);
    $resultado->bindParam(':nombre', $_POST['Nombre'], PDO::PARAM_STR);
    $resultado->bindParam(':apellidos', $_POST['Apellidos'], PDO::PARAM_STR);
    $resultado->bindParam(':correo', $_POST['Email'], PDO::PARAM_STR);
    $resultado->bindParam(':telefono', $_POST['Telefono'], PDO::PARAM_INT);
    $resultado->bindParam(':tipo', $_POST['Stand'], PDO::PARAM_STR);
    $resultado->bindParam(':comentario', $_POST['Comentario'], PDO::PARAM_STR);
    try {
        $resultado->execute();
    }catch(Exception $e){
        die($e->getMessage());
    }
    $id_session = $base->lastInsertId();
    $resultado->closeCursor();
}


?>
