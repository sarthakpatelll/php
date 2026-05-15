<?php 
$servername = "localhost";
$username = "root";
$password = "12/10/05";
$database = "myDb";
//set connection
$conn = new mysqli($servername,$username,$password,$database);
//check connection
if($conn->connect_error){
    die("connection failed".$conn->error);
}
$conn->select_db("myDb");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$student_id = $_POST['student_id'];
$student_name = $_POST['student_name'];
$stud_address = $_POST['stud_address'];
$course = $_POST['course'];
$age = $_POST['age'];
$mobileno = $_POST['mobileno'];

//insert data
$stmt = $conn->prepare("INSERT INTO student (student_id,student_name,course,age,mobileno,stud_address) VALUES (?,?,?,?,?,?)");
$stmt->bind_param("issis",$student_id,$student_name,$course,$age,$mobileno,$stud_address);
if ($stmt->execute()) {
        echo "Student details inserted successfully!<br>";
    } else {
        echo "Error inserting student details: " . $stmt->error;
    }
    $stmt->close();
}

// STEP 5: Fetch all products
$student_result = $conn->query("SELECT * FROM student");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
    <h2>Add Student Details</h2>
    <form method="POST" action="">
        <input type="number" id="student_id" name="student_id" placeholder="Enter Student ID" required><br><br>
        <input type="text" id="student_name" name="student_name" placeholder="Enter Student Name" required><br><br>
        <input type="text" id="stud_address" name="stud_address" placeholder="Enter Student Address" required><br><br>
        <input type="text" id="course" name="course" placeholder="Enter Student Course" required><br><br>
        <input type="number" id="age" name="age" placeholder="Enter Student age" required><br><br>
        <input type="number" id="mobileno" name="mobileno" placeholder="Enter Student Mobile No" required><br><br>
        <input type="submit" id="submit" value="Submit">
    </form>    
    <h2>Students List</h2>
    <table border="1" cellpadding="5">
        <tr>  
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Address</th>
            <th>Course</th>
            <th>Age</th>
            <th>Mobile No</th>
        </tr>

        <?php
        if ($student_result->num_rows > 0) {
            while ($row = $student_result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['student_id']}</td>
                    <td>{$row['student_name']}</td>
                    <td>{$row['stud_address']}</td>
                    <td>{$row['course']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['mobileno']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No student found.</td></tr>";
        }
        ?>  
    </table>      
</body>
</html>
<?php
$conn->close(); 
?>