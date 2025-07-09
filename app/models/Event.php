<?php
// File: app/models/Event.php

class Event {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllEvents() {
        $stmt = $this->db->query("SELECT * FROM events ORDER BY tanggal_event ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id) {
        $stmt = $this->db->prepare("SELECT * FROM events WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function registerUserToEvent($userId, $eventId) {
        // Cek dulu apakah user sudah terdaftar
        $stmt_check = $this->db->prepare("SELECT id FROM pendaftaran WHERE id_user = ? AND id_event = ?");
        $stmt_check->execute([$userId, $eventId]);
        if ($stmt_check->fetch()) {
            return false; // Sudah terdaftar
        }

        $stmt = $this->db->prepare("INSERT INTO pendaftaran (id_user, id_event) VALUES (?, ?)");
        return $stmt->execute([$userId, $eventId]);
    }
}