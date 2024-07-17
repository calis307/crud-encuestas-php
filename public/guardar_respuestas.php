<?php
include '../core/db.php';
session_start();

$conn = connectDB();

$usuario_id = $_SESSION['user_id'];
$profesor_id = $_POST['profesor_id'];
$comentario = $_POST['comentario'];

foreach ($_POST as $key => $value) {
    if (strpos($key, 'criterio_') !== false) {
        $criterio_id = str_replace('criterio_', '', $key);
        $respuesta = $value;

        // Preparar y ejecutar la consulta
        $stmt = $conn->prepare("INSERT INTO respuestas (usuario_id, profesor_id, criterio_id, respuesta, comentario) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiis", $usuario_id, $profesor_id, $criterio_id, $respuesta, $comentario);
        $stmt->execute();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta Enviada</title>
</head>
<body>
    <h1>Encuesta enviada con éxito.</h1>
    <a href="../views/encuesta/index.php"><button>Hacer otra encuesta</button></a>
</body>
</html>
