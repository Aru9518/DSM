<!DOCTYPE html>
<?php
/*$base = new PDO('mysql:host=localhost;dbname=cuestionarios','root','');
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/
?>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title>Encuesta</title>
</head>
<br>
<br action="" method="post">
<fieldset>
    <legend>Titulación</legend>
    <label for="titulacion">Titulación</label>
    <select name="titulacion" id="titulacion">
        <?php/*
            $resultado = $base->query('SELECT * FROM titulacion');
            while ($datos = $resultado->fetch())
            {
                echo '<option value="'.$datos['id_titulacion'].'">'.$datos['nombre'].'</option>';
            }
            $resultado->closeCursor();*/
        ?>
    </select>
    <label for="asignatura">Asignaturas</label>
    <select name="asignatura" id="asignatura">
        <?php/*
            $resultado = $base->query('SELECT * FROM asignaturas');
            while ($datos = $resultado->fetch())
            {
                echo '<option value="'.$datos['id_asignatura'].'">'.$datos['nombre'].'</option>';
            }
            $resultado->closeCursor();*/
        ?>
    </select>
</fieldset>
<br>
<fieldset>
    <legend>Información Personal</legend>
    <label for="edad">Edad</label>
    <input type="number" min="0" max="100" name="edad" id="edad" /></br>
    <label for="sexo">Edad</label>
    <select name="sexo" id="sexo">
        <option value="1">Hombre</option>
        <option value="2">Mujer</option>
    </select></br>
    <label for="curso_alto">Curso más alto matriculado</label>
    <input type="number" min="1" max="4" name="curso_alto" id="curso_alto"/>
    <label for="curso_bajo">Curso más bajo matriculado</label>
    <input type="number" min="1" max="4" name="curso_bajo" id="curso_bajo"/></br>
    <label for="veces_matriculadro">Número de veces matriculado en esta asignatura</label>
    <input type="number" min="1" name="veces_matriculado" id="veces_matriculadro"/></br>
    <label for="veces_examinado">Número de veces examinado de esta asignatura</label>
    <input type="number" min="1" name="veces_examinado" id="veces_examinado"/></br>
    <label for="interes">Le interesa la asignatura</label>
    <select name="interes" id="interes">
        <option value="1">Nada</option>
        <option value="2">Algo</option>
        <option value="3">Bastante</option>
        <option value="4">Mucho</option>
    </select></br>
    <label for="tutorias">Hace uso de las tutorías</label>
    <select name="tutorias" id="tutorias">
        <option value="1">Nada</option>
        <option value="2">Algo</option>
        <option value="3">Bastante</option>
        <option value="4">Mucho</option>
    </select></br>
    <label for="dificultad">Dificultad de la asignatura</label>
    <select name="dificultad" id="dificultad">
        <option value="1">Baja</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
        <option value="4">Muy alta</option>
    </select></br>
    <label for="calificacion">Calificación esperada</label>
    <select name="calificacion" id="calificacion">
        <option value="1">NP</option>
        <option value="2">Sus</option>
        <option value="3">Aprob</option>
        <option value="4">Not</option>
        <option value="5">Sobr</option>
        <option value="6">Mat. Hon.</option>
    </select></br>
    <label for="asistencia">Porcentaje de asistencia a clase</label>
    <select name="asistencia" id="asistencia">
        <option value="1">Menos del 50%</option>
        <option value="2">Entre el 50% y el 80%</option>
        <option value="3">Más del 80%</option>
    </select>
</fieldset></br>
<fieldset>
    <?php/*
    $resultado = $base->query('SELECT * FROM preguntas');
    while ($datos = $resultado->fetch())
    {
        echo '<label for="'.$datos['id_pregunta'].'">'.$datos['descripcion'].'</label>';
        echo '<select name="'.$datos['id_pregunta'].'" id="'.$datos['id_pregunta'].'">';
        echo '<option value="0">N/S</option>';
        echo '<option value="1">1</option>';
        echo '<option value="2">2</option>';
        echo '<option value="3">3</option>';
        echo '<option value="4">4</option>';
        echo '<option value="5">5</option>';
        echo '</select>';
    }
    $resultado->closeCursor();
    */?>
</fieldset>
</form>
</body>
</html>
`