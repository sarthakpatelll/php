<?php
// Creating an associative array
$person = array(
    "name" => "Sarthak",
    "age" => 19,
    "city" => "Gandhinagar"
);

// Accessing values
echo "Name: " . $person["name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";
echo "City: " . $person["city"] . "<br>";

// Looping through associative array
foreach ($person as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
?>
