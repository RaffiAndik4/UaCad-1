<?php
// File: app/controllers/AuthController.php

class AuthController {
    public function login() {
        require_once '../app/views/auth/login.php';
    }

    public function processLogin() {
         if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
        require_once '../app/config.php';
        $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        
        require_once '../app/models/User.php';
        $userModel = new User($db);

        $user = $userModel->findByEmail($_POST['email']);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nama_lengkap'];
            header('Location: ' . BASE_URL . '/home');
        } else {
            $_SESSION['error'] = 'Email atau password salah!';
            header('Location: ' . BASE_URL . '/login');
        }
    }

    public function register() {
        require_once '../app/views/auth/register.php';
    }

    public function processRegister() {
        session_start();
        require_once '../app/config.php';
        $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);

        require_once '../app/models/User.php';
        $userModel = new User($db);
        
        $success = $userModel->register($_POST['nama_lengkap'], $_POST['email'], $_POST['password'], $_POST['nim']);
        
        if ($success) {
            $_SESSION['success'] = 'Registrasi berhasil! Silakan login.';
            header('Location: ' . BASE_URL . '/login');
        } else {
            $_SESSION['error'] = 'Registrasi gagal, email atau NIM mungkin sudah digunakan.';
            header('Location: ' . BASE_URL . '/register');
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: ' . BASE_URL . '/login');
    }
}