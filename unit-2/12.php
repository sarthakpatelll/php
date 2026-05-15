<?php 
//create an multi dimentional array
$students = array(
    array("name"=>"sarthak","course"=>"bca","city"=>"gandhinagar"),
    array("name"=>"Divya","course"=>"bsc","city"=>"surat"),
    array("name"=>"Rahul","course"=>"bcom","city"=>"Ahemdabad"));

//make table for storedata in it
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Course</th><th>City</th></tr>";
foreach ($students as $student) {
    echo "<tr><td>".$student['name']."</td><td>".$student['course']."</td><td>".$student['city']."</tr>";
}   
echo "</table>"; 
?>