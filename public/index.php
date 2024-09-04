<?php
require '../config/db.php';
require '../app/controllers/ProductoController.php';
require '../app/controllers/CarritoController.php';
require '../app/controllers/AuthController.php';


$authController = new AuthController();
$controller = new ProductoController();

if ($_SERVER['REQUEST_URI'] == '/productos') {
    $controller->index();
} else if (preg_match('/\/productos\/\d+/', $_SERVER['REQUEST_URI'])) {
    $controller->show(explode('/', $_SERVER['REQUEST_URI'])[2]);
}

$carritoController = new CarritoController();

if ($_SERVER['REQUEST_URI'] == '/carrito') {
    $carritoController->mostrar();
} elseif ($_SERVER['REQUEST_URI'] == '/carrito/agregar') {
    $carritoController->agregar();
}


if ($_SERVER['REQUEST_URI'] == '/registro') {
    $authController->registro();
} elseif ($_SERVER['REQUEST_URI'] == '/login') {
    $authController->login();
} elseif ($_SERVER['REQUEST_URI'] == '/logout') {
    $authController->logout();
}

?>
