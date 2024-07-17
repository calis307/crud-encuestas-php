<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta de Evaluación del Profesor</title>
</head>
<body>
    <h1>Encuesta de Evaluación del Profesor</h1>
    <form action="../../public/guardar_respuestas.php" method="post">
        <label for="profesor">Seleccione el profesor:</label>
        <select name="profesor_id" id="profesor" required>
            <?php
            include '../../core/db.php';
            $conn = connectDB();
            $result = $conn->query("SELECT id, nombre FROM profesores");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
            }
            $conn->close();
            ?>
        </select>

        <h2>Evaluación de criterios</h2>
        <?php
        $conn = connectDB();
        $result = $conn->query("SELECT id, descripcion FROM criterios");
        while ($row = $result->fetch_assoc()) {
            echo "<label>{$row['descripcion']}:</label><br>";
            echo "<input type='radio' name='criterio_{$row['id']}' value='1' required> 1 ";
            echo "<input type='radio' name='criterio_{$row['id']}' value='2'> 2 ";
            echo "<input type='radio' name='criterio_{$row['id']}' value='3'> 3 ";
            echo "<input type='radio' name='criterio_{$row['id']}' value='4'> 4 ";
            echo "<input type='radio' name='criterio_{$row['id']}' value='5'> 5 <br><br>";
        }
        $conn->close();
        ?>

        <label for="comentario">Comentarios adicionales:</label><br>
        <textarea name="comentario" id="comentario" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Enviar Encuesta">
    </form>
    <br>
    <a href="../auth/login.php"><button>Login como Administrador</button></a>
</body>
</html>
