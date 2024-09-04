<?php
class Carrito {
    public function __construct() {
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }
    }

    public function agregarProducto($producto, $cantidad) {
        if (isset($_SESSION['carrito'][$producto['id']])) {
            $_SESSION['carrito'][$producto['id']]['cantidad'] += $cantidad;
        } else {
            $_SESSION['carrito'][$producto['id']] = [
                'nombre' => $producto['nombre'],
                'precio' => $producto['precio'],
                'cantidad' => $cantidad
            ];
        }
    }

    public function quitarProducto($productoId) {
        unset($_SESSION['carrito'][$productoId]);
    }

    public function obtenerProductos() {
        return $_SESSION['carrito'];
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($_SESSION['carrito'] as $producto) {
            $total += $producto['precio'] * $producto['cantidad'];
        }
        return $total;
    }
}
?>
