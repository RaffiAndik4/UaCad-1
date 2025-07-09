<?php
// File: public/index.php
require_once '../app/config.php';

// Simple Router
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
$path = trim(str_replace('/uacad', '', $request_uri[0]), '/'); // Disesuaikan dengan nama folder
$segments = explode('/', $path);

$controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'AuthController';
$methodName = $segments[1] ?? 'index';
$param = $segments[2] ?? null;

// Routing logic
if ($path === 'login' || $path === '') {
    require_once '../app/controllers/AuthController.php';
    $controller = new AuthController();
    $controller->login();
} elseif ($path === 'process-login') {
    require_once '../app/controllers/AuthController.php';
    $controller = new AuthController();
    $controller->processLogin();
} elseif ($path === 'register') {
    require_once '../app/controllers/AuthController.php';
    $controller = new AuthController();
    $controller->register();
} elseif ($path === 'process-register') {
    require_once '../app/controllers/AuthController.php';
    $controller = new AuthController();
    $controller->processRegister();
} elseif ($path === 'logout') {
    require_once '../app/controllers/AuthController.php';
    $controller = new AuthController();
    $controller->logout();
}
// di dalam file public/index.php
 elseif ($segments[0] === 'home' || $path === '') { // Jadikan halaman utama setelah login
    // Autentikasi dulu
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header('Location: ' . BASE_URL . '/login');
        exit();
    }

    require_once '../app/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
} // ... 
elseif ($segments[0] === 'events') {
    require_once '../app/controllers/EventController.php';
    $controller = new EventController();
    if ($methodName === 'index') {
        $controller->index();
    } elseif ($methodName === 'detail' && $param) {
        $controller->detail($param);
    } elseif ($methodName === 'register' && $param) {
        $controller->registerEvent($param);
    } else {
        echo "404 Not Found";
    }
}
// public/index.php

// ... rute lainnya ...
elseif ($segments[0] === 'dashboard') {
    require_once '../app/controllers/DashboardController.php';
    $controller = new DashboardController();
    $controller->index();
} 
elseif ($segments[0] === 'jadwal') { // TAMBAHKAN BLOK INI
    require_once '../app/controllers/DashboardController.php';
    $controller = new DashboardController();
    $controller->jadwal();
} 
// ...
else {
    echo "404 Not Found - Halaman tidak ditemukan.";
}