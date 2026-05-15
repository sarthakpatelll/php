<?php
//write a php script for that creates a database named "NG1" in MYSQL and also create a table "myTable" in above created database NG1.
// MySQL connection settings
$servername = "localhost";
$username = "root";        
$password = "12/10/05";

// Create connection to MySQL server
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 1: Create Database NG1
$sql = "CREATE DATABASE IF NOT EXISTS NG1";
if ($conn->query($sql) === TRUE) {
    echo "Database 'NG1' created successfully.<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// Step 2: Select the database
$conn->select_db("NG1");

// Step 3: Create Table 'myTable'
$sql = "CREATE TABLE IF NOT EXISTS myTable (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'myTable' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>