<?php
require_once __DIR__ . '/../models/Producto.php';


class ProductoController {
    private $productoModel;

    public function __construct() {
        $this->productoModel = new Producto();
    }

    // Lista de productos
    public function index() {
        $productos = $this->productoModel->obtenerTodos(); // Asegúrate de que obtenerTodos() devuelva un array
        require 'views/productos/index.php';
    }
    
    // Mostrar un solo producto
    public function show($id) {
        $producto = $this->productoModel->obtenerPorId($id);
        require 'views/productos/show.php';
    }

    // Formulario para crear producto
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validar y guardar el producto
            $this->productoModel->crear($_POST);
            header('Location: /productos');
        }
        require 'views/productos/create.php';
    }

    // Formulario para editar producto
    public function edit($id) {
        $producto = $this->productoModel->obtenerPorId($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validar y actualizar el producto
            $this->productoModel->actualizar($id, $_POST);
            header('Location: /productos');
        }
        require 'views/productos/edit.php';
    }

    // Eliminar producto
    public function delete($id) {
        $this->productoModel->eliminar($id);
        header('Location: /productos');
    }
}
?>
