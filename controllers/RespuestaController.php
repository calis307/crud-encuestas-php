<?php
include_once '../core/db.php';
include_once '../models/Respuesta.php';

$conn = connectDB();

$respuestas = Respuesta::all($conn);
include '../views/respuestas/index.php';
?>
