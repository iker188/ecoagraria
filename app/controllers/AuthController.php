
<?php
class AuthController {
    public function registro() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validar y registrar usuario en la BD
        }
        require 'views/auth/registro.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Validar credenciales y crear sesión
        }
        require 'views/auth/login.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: /login');
    }
}
?>
