<?php 

// practice of 1st practicle.....

//database setting

//set connection
$conn = new mysqli($servername,$username,$password);
//check connection
if($conn->connect_error){
    die("connecting error".$conn->connect_error);
}
//create database
$sql = "CREATE DATABASE IF NOT EXISTS practice1";
//check databse
if($conn->query($sql)===TRUE){
    echo "Database 'practice1' created successfully.<br>";
}else{
    echo "error creating Database 'practice1'",$conn->error;
}
//select database
$conn->select_db("practice1");
//create table
$sql = "CREATE TABLE IF NOT EXISTS practice_student(
        stud_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        stud_name VARCHAR(20) NOT NULL,
        stud_rollno INT(10) NOT NULL,
        stud_subject VARCHAR(20) NOT NULL
        )";
//check table
if($conn->query($sql)===TRUE){
    echo "table 'practice_student' is created.<br>";
}else{
    echo "error creating table 'practice_student'".$conn->error;
}    

//handel form submission after creating html form
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $stud_id = $_POST['stud_id'];
    $stud_name = $_POST['stud_name'];
    $stud_rollno = $_POST['stud_rollno'];
    $stud_subject = $_POST['stud_subject'];

//insert data
$stmt = $conn->prepare("INSERT INTO practice_student (stud_id, stud_name, stud_rollno, stud_subject) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isii", $stud_id, $stud_name, $stud_rollno, $stud_subject);

if($stmt->execute()){
    echo "detail inserted successfully!<br>";
}else{
    echo "Error inserting data".$stmt->error;
}
//close connection
$stmt->close(); 
}
//practice of 2nd practicle.....
//create html form for insert data
?>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h2>Enter Student Details</h2>
    <form method="POST">
    <input type="number" id="stud_id" name="stud_id" placeholder="Enter student id" required><br><br>
    <input type="text" id="stud_name" name="stud_name" placeholder="Enter student name" required><br><br>
    <input type="number" id="stud_rollno" name="stud_rollno" placeholder="Enter student rollno" required><br><br>
    <input type="text" id="stud_subject" name="stud_subject" placeholder="Enter student subject" required><br><br>
    <input type="submit"><br></form>
   
</body>
</html>
<?php 
$conn->close(); 
?>