<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Profesores</title>
</head>
<body>
    <h1>Gestionar Profesores</h1>
    <form method="post" action="../controllers/ProfesorController.php">
        <input type="hidden" name="action" value="add">
        <label for="nombre">Nombre del Profesor:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Agregar Profesor">
    </form>
    <h2>Lista de Profesores</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($profesores as $profesor): ?>
            <tr>
                <td><?= $profesor['id'] ?></td>
                <td><?= $profesor['nombre'] ?></td>
                <td>
                    <form style='display:inline;' method='post' action="../controllers/ProfesorController.php">
                        <input type='hidden' name='action' value='edit'>
                        <input type='hidden' name='id' value='<?= $profesor['id'] ?>'>
                        <input type='text' name='nombre' value='<?= $profesor['nombre'] ?>'>
                        <input type='submit' value='Editar'>
                    </form>
                    <form style='display:inline;' method='post' action="../controllers/ProfesorController.php">
                        <input type='hidden' name='action' value='delete'>
                        <input type='hidden' name='id' value='<?= $profesor['id'] ?>'>
                        <input type='submit' value='Eliminar' onclick="return confirm('¿Estás seguro de que deseas eliminar este profesor?')">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="../public/admin.php">Volver al Panel de Administración</a>
</body>
</html>
