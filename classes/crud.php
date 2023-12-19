<?php

require 'database.php';
class crud
{
    private $conn;
<<<<<<< HEAD
    public function __construct() 
    {
=======
    public function __construct() {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $db = new Database();
        $this->conn = $db->getConnection();
    }

<<<<<<< HEAD
    public function executeQuery($table, $action, $data) 
    {
        switch ($action) 
        {
=======
    public function executeQuery($table, $action, $data) {
        switch ($action) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
            case 'create':
                return $this->createRecord($table, $data);
            case 'read':
                return $this->readRecord($table, $data['id']);
            case 'update':
                return $this->updateRecord($table, $data['id'], $data);
            case 'delete':
                return $this->deleteRecord($table, $data['id']);
            default:
<<<<<<< HEAD
                return false; 
=======
                return false; // Invalid action
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        }
    }


<<<<<<< HEAD
    public function createRecord($table, $data) 
    {
=======
    public function createRecord($table, $data) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_values($data));

        return $stmt->rowCount() > 0;
    }

<<<<<<< HEAD
    public function readRecord($table, $id) 
    {
=======
    public function readRecord($table, $id) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $sql = "SELECT * FROM $table WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

<<<<<<< HEAD
    public function updateRecord($table, $id, $data) 
    {
=======
    public function updateRecord($table, $id, $data) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $setClause = implode('=?, ', array_keys($data)) . '=?';

        $sql = "UPDATE $table SET $setClause WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));

        return $stmt->rowCount() > 0;
    }

<<<<<<< HEAD
    public function deleteRecord($table, $id) 
    {
=======
    public function deleteRecord($table, $id) {
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
        $sql = "DELETE FROM $table WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount() > 0;
    }

<<<<<<< HEAD
    public function __destruct() 
    {
        $this->conn = null;
    }
}
=======
    public function __destruct() {
        $this->conn = null;
    }
}
>>>>>>> f352bf3f132bc81b32b3ac1f0a493376811159fb
