<?php
// Creating a multidimensional array
$students = array(
    array(
        "name" => "Sarthak",
        "age" => 22,
        "marks" => 85
    ),
    array(
        "name" => "Rahul",
        "age" => 23,
        "marks" => 78
    ),
    array(
        "name" => "Priya",
        "age" => 21,
        "marks" => 92
    )
);

// Accessing values
echo "First student name: " . $students[0]["name"] . "<br>";
echo "Second student marks: " . $students[1]["marks"] . "<br>";

// Looping through multidimensional array
foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", ";
    echo "Age: " . $student["age"] . ", ";
    echo "Marks: " . $student["marks"] . "<br>";
}
?>
