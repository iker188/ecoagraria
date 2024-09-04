<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Crear Producto</h1>
    <form action="/productos/create" method="POST">
        <input type="text" name="nombre" placeholder="Nombre del producto" required>
        <input type="number" step="0.01" name="precio" placeholder="Precio" required>
        <select name="categoria_id">
            <!-- Poblado con las categorías de la BD -->
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
