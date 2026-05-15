<?php 
// Database settings
$servername = 'localhost';
$username = 'root';
$password = '12/10/05';
$dbname = 'mydb';

// Set connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Check if 'stud_address' column already exists
$checkColumn = $conn->query("SHOW COLUMNS FROM student LIKE 'stud_address'");
if ($checkColumn->num_rows == 0) {
    // Add column only if it doesn't exist
    $sql = "ALTER TABLE student ADD stud_address VARCHAR(255) DEFAULT 'Not Provided' AFTER student_name";
    if ($conn->query($sql) === TRUE) {
        echo "Column 'stud_address' added successfully.<br>";
    } else {
        echo "Error adding column: " . $conn->error . "<br>";
    }
} else {
    echo "Column 'stud_address' already exists.<br>";
}

//Update stud_address where student_id = 1
$sql = "UPDATE student SET stud_address = 'Ahemdabad' WHERE student_id = 3;";
if ($conn->query($sql) === TRUE){
    echo "Address updated successfully.";
} else {
    echo "Error updating address: " . $conn->error;
}

$conn->close();
?>
