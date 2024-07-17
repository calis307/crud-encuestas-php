<?php
include '../core/session.php';
check_session();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
</head>
<body>
    <h1>Panel de Administración</h1>
    <nav>
        <ul>
            <li><a href="../controllers/ProfesorController.php">Gestionar Profesores</a></li>
            <li><a href="../controllers/CriterioController.php">Gestionar Criterios</a></li>
            <li><a href="../controllers/RespuestaController.php">Ver Resultados</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
</body>
</html>
