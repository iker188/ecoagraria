<?php
class ProductoController {
    public function index() {
        // Aquí irá la lógica para listar productos
        require 'views/productos/index.php';
    }

    public function show($id) {
        // Lógica para mostrar un producto específico
        require 'views/productos/show.php';
    }
}
?>
