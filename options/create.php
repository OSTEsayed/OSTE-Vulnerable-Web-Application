<?php
  require 'config.php';
try {
    // Step 1: Connect to MySQL
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Step 2: Create the database "OSTE"
    $sql = "CREATE DATABASE IF NOT EXISTS OSTE";
    $conn->exec($sql);
    echo "Database created successfully<br>";

    // Step 3: Switch to the "OSTE" database
    $conn->exec("USE OSTE");

    // Step 4: Create the "user" table
    $sql = "CREATE TABLE IF NOT EXISTS user (
                Id INT AUTO_INCREMENT PRIMARY KEY,
                name TEXT NOT NULL,
                password TEXT NOT NULL
            )";
    $conn->exec($sql);
        $sql = "INSERT INTO user (Id,name,password) VALUES ('26', 'ADmin','aDMin')";
    	$conn->exec($sql);
    echo "Table 'user' created successfully<br>";

    // Step 5: Create the "comontair" table
    $sql = "CREATE TABLE IF NOT EXISTS comontair (
                id INT AUTO_INCREMENT PRIMARY KEY,
                msg TEXT NOT NULL
            )";
    $conn->exec($sql);
    echo "Table 'comontair' created successfully<br>";

    $sql = "CREATE TABLE IF NOT EXISTS books (
                Id INT AUTO_INCREMENT PRIMARY KEY,
                name TEXT NOT NULL,
                author TEXT NOT NULL,
                year INT NOT NULL
            )";
    $conn->exec($sql);
    echo "Table 'books' created successfully<br>";

    $sql = "CREATE TABLE IF NOT EXISTS sport (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name TEXT NOT NULL
            )";
    $conn->exec($sql);
    echo "Table 'sport' created successfully<br>";


    $booksData = array(
    array("To Kill a Mockingbird", "Harper Lee", 1960),
    array("1984", "George Orwell", 1949),
    array("The Great Gatsby", "F. Scott Fitzgerald", 1925),
    array("Pride and Prejudice", "Jane Austen", 1813),
    array("The Lord of the Rings", "J.R.R. Tolkien", 1954),
    array("Harry Potter and the Philosopher's Stone", "J.K. Rowling", 1997),
    array("Moby-Dick", "Herman Melville", 1851),
    array("The Catcher in the Rye", "J.D. Salinger", 1951),
    array("Brave New World", "Aldous Huxley", 1932),
    array("The Hobbit", "J.R.R. Tolkien", 1937)
        // Add more books and authors as needed
    );

    $sql = "INSERT INTO books (name, author,year) VALUES (:name, :author,:year)";
    $stmt = $conn->prepare($sql);

    foreach ($booksData as $data) {
        $stmt->bindParam(':name', $data[0], PDO::PARAM_STR);
        $stmt->bindParam(':author', $data[1], PDO::PARAM_STR);
        $stmt->bindParam(':year', $data[2], PDO::PARAM_STR);
        $stmt->execute();
    }
        echo "books 'inserted successfully<br>";
$sportsData = array(
    "Football",
    "Basketball",
    "Tennis",
    "Cricket",
    "Baseball",
    "Volleyball",
    "Rugby",
    "Golf",
    "Swimming",
    "Athletics",
    "Ice Hockey",
    "Table Tennis",
    "Badminton",
    "Boxing",
    "Wrestling",
    "Gymnastics",
    "Cycling",
    "Skiing",
    "Figure Skating",
    "Surfing",
    "Martial Arts (e.g., Karate, Judo, Taekwondo)",
    "American Football",
    "Formula 1 Racing",
    "Horse Racing",
    "Archery",
    "Sailing",
    "Diving",
    "Rowing",
    "Triathlon",
    "Skateboarding"
);
    $sql = "INSERT INTO sport (name) VALUES (:name)";
    $stmt = $conn->prepare($sql);

    foreach ($sportsData as $data) {
        $stmt->bindParam(':name', $data, PDO::PARAM_STR);
        $stmt->execute();
    }
        echo "books 'inserted successfully<br>";


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

