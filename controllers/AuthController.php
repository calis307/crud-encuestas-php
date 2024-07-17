<?php
include_once '../core/session.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica las credenciales de administrador
    if ($username == "admin" && $password == "password") {
        $_SESSION['loggedin'] = true;
        header("Location: ../public/admin.php");
        exit();
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
        include '../views/auth/login.php';
    }
} else {
    include '../views/auth/login.php';
}
?>
