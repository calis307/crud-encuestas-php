<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <script src="../../assets/js/scripts.js"></script>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="post" action="../../controllers/UsuarioController.php" onsubmit="return validarFormularioRegistro()">
        <input type="hidden" name="action" value="register">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="provincia">Provincia:</label>
        <input type="text" id="provincia" name="provincia">

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad">

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono">

        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>

        <input type="submit" value="Registrarse">
    </form>
    <br>
    <a href="login_usuario.php">Ya tienes una cuenta? Iniciar Sesión</a>
</body>
</html>
