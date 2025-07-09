<?php

class DashboardController {

    /**
     * Menampilkan halaman Dashboard utama.
     */
    public function index() {
        // Mulai session hanya jika belum ada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Jika user belum login, paksa kembali ke halaman login
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL . '/login');
            exit();
        }
        
        // Memuat file view untuk dashboard
        require_once '../app/views/dashboard/dashboard.php';
    }

    /**
     * Menampilkan halaman Jadwal.
     */
    public function jadwal() {
        // Mulai session hanya jika belum ada
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Jika user belum login, paksa kembali ke halaman login
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASE_URL . '/login');
            exit();
        }
        
        // Memuat file view untuk jadwal
        require_once '../app/views/dashboard/jadwal.php';
    }
}