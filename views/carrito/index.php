<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>Carrito de Compras</h1>
   <!-- Mostrar productos solo si la variable está definida y no está vacía -->
<?php if (!empty($productos)): ?>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $id => $producto): ?>
                <tr>
                    <td><?= htmlspecialchars($producto['nombre']) ?></td>
                    <td><?= number_format($producto['precio'], 2) ?></td>
                    <td><?= $producto['cantidad'] ?></td>
                    <td><?= number_format($producto['precio'] * $producto['cantidad'], 2) ?></td>
                    <td>
                        <form action="/carrito/quitar" method="post">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button type="submit">Quitar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Total: <?= number_format($carrito->calcularTotal(), 2) ?>S/.</p>
<?php else: ?>
    <p>El carrito está vacío.</p>
<?php endif; ?>

    <a href="/checkout">Proceder al Pago</a>
</body>
</html>
