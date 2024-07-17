<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Criterios</title>
</head>
<body>
    <h1>Gestionar Criterios</h1>
    <form method="post" action="../controllers/CriterioController.php">
        <input type="hidden" name="action" value="add">
        <label for="descripcion">Descripción del Criterio:</label>
        <input type="text" id="descripcion" name="descripcion" required>
        <input type="submit" value="Agregar Criterio">
    </form>
    <h2>Lista de Criterios</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($criterios as $criterio): ?>
            <tr>
                <td><?= $criterio['id'] ?></td>
                <td><?= $criterio['descripcion'] ?></td>
                <td>
                    <form style='display:inline;' method='post' action="../controllers/CriterioController.php">
                        <input type='hidden' name='action' value='edit'>
                        <input type='hidden' name='id' value='<?= $criterio['id'] ?>'>
                        <input type='text' name='descripcion' value='<?= $criterio['descripcion'] ?>'>
                        <input type='submit' value='Editar'>
                    </form>
                    <form style='display:inline;' method='post' action="../controllers/CriterioController.php">
                        <input type='hidden' name='action' value='delete'>
                        <input type='hidden' name='id' value='<?= $criterio['id'] ?>'>
                        <input type='submit' value='Eliminar'>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="../public/admin.php">Volver al Panel de Administración</a>
</body>
</html>
