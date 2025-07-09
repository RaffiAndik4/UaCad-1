<?php
class HomeController {
// app/controllers/HomeController.php
// MENJADI SEPERTI INI:
public function index() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['user_id'])) {
        header('Location: ' . BASE_URL . '/login');
        exit();
    }

    require_once '../app/views/layouts/header.php';
    require_once '../app/views/home/index.php';
    require_once '../app/views/layouts/footer.php';
}
}