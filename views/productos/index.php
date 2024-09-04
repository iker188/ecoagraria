<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <a href="/productos/create">Agregar Producto</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($productos) && is_array($productos)): ?>
            <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= htmlspecialchars($producto['nombre']) ?></td>
                <td><?= number_format($producto['precio'], 2) ?></td>
                <td><?= htmlspecialchars($producto['categoria']) ?></td>
                <td>
                    <a href="/productos/edit?id=<?= $producto['id'] ?>">Editar</a>
                    <form action="/productos/delete" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php else: ?>
    <p>No hay productos disponibles.</p>
<?php endif; ?>
        </tbody>
    </table>
</body>
</html>
