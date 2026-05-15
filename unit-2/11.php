<?php 
//create an associative array
$student = array(
    "name"=>"sarthak",
    "age"=>19,
    "class"=>"bca",
    "rollnum"=>130,
    "city"=>"gandhinagar"
);
//print it using its keys
echo "Student Details :<br>";
echo "Name :".$student["name"]."<br>";
echo "Age :".$student["age"]."<br>";
echo "Class :".$student["class"]."<br>";
echo "Roll Number :".$student["rollnum"]."<br>";
echo "City :".$student["city"]."<br>";
?>