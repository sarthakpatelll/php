<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operators in PHP</title>
</head>
<body>
<center>
<h2>Arithmetic Operations</h2>

<form method="post">
    <input type="number" name="num1" placeholder="Enter first number" required><p>
    <input type="number" name="num2" placeholder="Enter second number" required><p>
    <button type="submit" name="calculate">Calculate</button>
</form>

<?php
if (isset($_POST['calculate'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];

    echo "<p>Addition ( $a + $b ) = " . ($a + $b) . "</p>";
    echo "<p>Subtraction ( $a - $b ) = " . ($a - $b) . "</p>";
    echo "<p>Multiplication ( $a * $b ) = " . ($a * $b) . "</p>";

    if ($b != 0 && $a != 0) {
        echo "<p>Division ( $a / $b ) = " . ($a / $b) . "</p>";
        echo "<p>Modulus ( $a % $b ) = " . ($a % $b) . "</p>";
    } else {
        echo "<p style='color:red;'>Division and Modulus by 0 is not allowed!</p>";
    }
}
?>
</center>
</body>
</html>
