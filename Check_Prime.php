<!DOCTYPE html>
<html>
<head>
    <title>Check if Sum is Prime</title>
</head>
<body>
<center>
<h2>Enter three numbers</h2>
<form method="post" action="">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>
    Number 3: <input type="number" name="num3" required><br><br>
    <input type="submit" name="submit" value="Check">
</form>

<?php
// Function to check if a number is prime
function isPrime($number) {
    if ($number <= 1) { // 0 thi small number PRIME naa hoy...
        return false; 
    }
    for ($i = 2; $i <= sqrt($number); $i++) { //sqrt = squre root...for ex: sqrt(17) = 4.12
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get input values
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $num3 = intval($_POST['num3']);

    // Calculate sum
    $sum = $num1 + $num2 + $num3;

    echo "<h3>Sum of the numbers is : $sum</h3>";

    // Check if sum is prime
    if (isPrime($sum)) {
        echo "<h3>The sum $sum is a Prime Number.</h3>";
    } else {
        echo "<h3>The sum $sum is NOT a Prime Number.</h3>";
    }
}
?>
</center>
</body>
</html>
