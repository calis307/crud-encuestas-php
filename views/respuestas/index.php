<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Resultados</title>
</head>
<body>
    <h1>Resultados de las Encuestas</h1>
    <table border="1">
        <tr>
            <th>Profesor</th>
            <th>Criterio</th>
            <th>Respuesta</th>
            <th>Comentario</th>
        </tr>
        <?php foreach ($respuestas as $respuesta): ?>
            <tr>
                <td><?= $respuesta['profesor'] ?></td>
                <td><?= $respuesta['criterio'] ?></td>
                <td><?= $respuesta['respuesta'] ?></td>
                <td><?= $respuesta['comentario'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="../public/admin.php">Volver al Panel de Administración</a>
</body>
</html>
