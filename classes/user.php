<?php

require 'database.php';

<<<<<<< HEAD
class User {
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }
    public function createUser($username, $email, $password) 
    {
=======

// This script is for Static CRUD

class User {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }
    public function createUser($username, $email, $password) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$username, $email, $hashedPassword]);

        return $stmt->rowCount() > 0;
    }

<<<<<<< HEAD
    public function readUser($id) 
    {
=======
    public function readUser($id) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

<<<<<<< HEAD
    public function updateUser($id, $username, $email, $password) 
    {
=======
    public function updateUser($id, $username, $email, $password) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE users SET username=?, email=?, password=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$username, $email, $hashedPassword, $id]);

        return $stmt->rowCount() > 0;
    }

<<<<<<< HEAD
    public function deleteUser($id) 
    {
=======
    public function deleteUser($id) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $sql = "DELETE FROM users WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount() > 0;
    }

<<<<<<< HEAD
    public function __destruct() 
    {
=======
    public function __destruct() {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $this->conn = null;
    }
}
