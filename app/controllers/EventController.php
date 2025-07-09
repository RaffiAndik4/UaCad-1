<?php
// File: app/controllers/EventController.php

class EventController {
    private $db;
    private $eventModel;

    public function __construct() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL . '/login');
            exit();
        }
        
        require_once '../app/config.php';
        $this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
        require_once '../app/models/Event.php';
        $this->eventModel = new Event($this->db);
    }
    
    public function index() {
        $events = $this->eventModel->getAllEvents();
        require_once '../app/views/layouts/header.php';
        require_once '../app/views/events/index.php';
        require_once '../app/views/layouts/footer.php';
    }

    public function detail($id) {
        $event = $this->eventModel->findById($id);
        require_once '../app/views/layouts/header.php';
        require_once '../app/views/events/detail.php';
        require_once '../app/views/layouts/footer.php';
    }

    public function registerEvent($eventId) {
        $userId = $_SESSION['user_id'];
        $success = $this->eventModel->registerUserToEvent($userId, $eventId);

        if ($success) {
            $_SESSION['success'] = 'Berhasil mendaftar event!';
        } else {
            $_SESSION['error'] = 'Gagal mendaftar event atau Anda sudah terdaftar.';
        }
        header('Location: ' . BASE_URL . '/events/detail/' . $eventId);
    }
}