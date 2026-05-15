<?php 
$servername = "localhost";
$username = "root";
$password = "12/10/05";
$database = "myDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->error);
}

$sql = "CREATE TABLE IF NOT EXISTS student (
    student_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(50) NOT NULL,
    course VARCHAR(30) NOT NULL,
    age INT NOT NULL,
    mobileno VARCHAR(15) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'student' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
