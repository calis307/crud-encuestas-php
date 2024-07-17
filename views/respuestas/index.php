<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Resultados</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <h1>Resultados de las Encuestas</h1>
    <table border="1">
        <tr>
            <th>Usuario</th>
            <th>Profesor</th>
            <th>Criterio</th>
            <th>Respuesta</th>
            <th>Comentario</th>
        </tr>
        <?php
        include '../../core/db.php';
        $conn = connectDB();
        $result = $conn->query("
            SELECT usuarios.nombre AS usuario, profesores.nombre AS profesor, criterios.descripcion AS criterio, respuestas.respuesta, respuestas.comentario
            FROM respuestas
            JOIN usuarios ON respuestas.usuario_id = usuarios.id
            JOIN profesores ON respuestas.profesor_id = profesores.id
            JOIN criterios ON respuestas.criterio_id = criterios.id
        ");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['usuario']}</td>";
            echo "<td>{$row['profesor']}</td>";
            echo "<td>{$row['criterio']}</td>";
            echo "<td>{$row['respuesta']}</td>";
            echo "<td>{$row['comentario']}</td>";
            echo "</tr>";
        }
        $conn->close();
        ?>
    </table>
    <a href="../../public/admin.php">Volver al Panel de Administración</a>
</body>
</html>
