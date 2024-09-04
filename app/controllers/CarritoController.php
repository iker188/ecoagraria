<?php
require_once __DIR__ . '/../models/Carrito.php';



class CarritoController {
    private $carrito;

    public function __construct() {
        session_start();
        $this->carrito = new Carrito();
    }

    public function agregar() {
        // Simulación de producto desde la base de datos o petición
        $producto = ['id' => 1, 'nombre' => 'Producto 1', 'precio' => 20.00];
        $cantidad = 1; // Puedes obtener esto de una solicitud POST

        $this->carrito->agregarProducto($producto, $cantidad);
        header('Location: /carrito'); // Redirigir a la vista del carrito
    }
    public function mostrar() {
        $productos = $this->carrito->obtenerProductos(); // Obtener productos del carrito
        $carrito = $this->carrito; // Asigna el objeto carrito para calcular el total
        require 'views/carrito/index.php';
    }
    
}
?>
