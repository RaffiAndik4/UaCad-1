<?php
// File: app/models/User.php

class User {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function register($nama, $email, $password, $nim) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO users (nama_lengkap, email, password, nim) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nama, $email, $hashedPassword, $nim]);
    }

    public function findByEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}