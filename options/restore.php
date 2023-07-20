<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
    // Step 1: Connect to MySQL
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Create or drop the database "OSTE" if it already exists
    $sql = "DROP DATABASE IF EXISTS OSTE";
    $conn->exec($sql);
    $sql = "CREATE DATABASE OSTE";
    $conn->exec($sql);
    echo "Database created successfully<br>";

    // Step 3: Switch to the "OSTE" database
    $conn->exec("USE OSTE");

    // Step 4: Create the "user" table
    $sql = "CREATE TABLE user (
                Id INT AUTO_INCREMENT PRIMARY KEY,
                name TEXT NOT NULL,
                password TEXT NOT NULL
            )";
    $conn->exec($sql);
    echo "Table 'user' created successfully<br>";

    // Step 5: Create the "comontair" table
    $sql = "CREATE TABLE comontair (
                id INT AUTO_INCREMENT PRIMARY KEY,
                msg TEXT NOT NULL
            )";
    $conn->exec($sql);
    echo "Table 'comontair' created successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
