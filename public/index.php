<?php
require '../config/db.php';
require '../app/controllers/ProductoController.php';

$controller = new ProductoController();

if ($_SERVER['REQUEST_URI'] == '/productos') {
    $controller->index();
} else if (preg_match('/\/productos\/\d+/', $_SERVER['REQUEST_URI'])) {
    $controller->show(explode('/', $_SERVER['REQUEST_URI'])[2]);
}
?>
