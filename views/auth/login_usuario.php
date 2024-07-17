<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión de Usuario</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <h1>Inicio de Sesión</h1>
    <form method="post" action="../../controllers/UsuarioController.php">
        <input type="hidden" name="action" value="login">
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <br>
    <a href="register.php">Registrarse</a>
</body>
</html>
s