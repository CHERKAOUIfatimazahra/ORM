<?php

require 'classes/crud.php';

$crudObj = new crud();

// Create a user
$userData = array(
    'username' => 'john_doe',
    'email' => 'john@example.com',
    'password' => '123456'
);

if ($crudObj->executeQuery('users', 'create', $userData)) {
    echo "User created successfully.<br>";
} else {
    echo "Error creating user.<br>";
}

// Read a user
$userIdToRead = 1;
$readUserData = $crudObj->executeQuery('users', 'read', array('id' => $userIdToRead));

if ($readUserData) {
    echo "User read successfully:<br>";
    echo "<pre>";
    print_r($readUserData);
    echo "</pre>";
} else {
    echo "Error reading user.<br>";
}

// Update a user
$userIdToUpdate = 1;
$updateUserData = array(
    'username' => 'john_doe_updated',
    'email' => 'john_updated@example.com',
    'password' => '456789'
);

if ($crudObj->executeQuery('users', 'update', array('id' => $userIdToUpdate) + $updateUserData)) {
    echo "User updated successfully.<br>";
} else {
    echo "Error updating user.<br>";
}

// Delete a user
$userIdToDelete = 1;

if ($crudObj->executeQuery('users', 'delete', array('id' => $userIdToDelete))) {
    echo "User deleted successfully.<br>";
} else {
    echo "Error deleting user.<br>";
}

// Clean up
unset($crudObj);

// Classe User
class User {
    private $id;
    private $username;
    private $email;

    // Getters and setters...

    public function save() {
        // Code pour sauvegarder l'objet User dans la base de données
        // Utilise l'ORM pour accomplir cette tâche
    }

    public function delete() {
        // Code pour supprimer l'objet User de la base de données
        // Utilise l'ORM pour accomplir cette tâche
    }
}