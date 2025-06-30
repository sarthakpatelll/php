<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
</head>
<body>
<center>
<h2>Enter a number to find sum of its digits</h2>
<form method="post" action="">
    Number: <input type="number" name="number" required><br><br>
    <input type="submit" name="submit" value="Calculate Sum">
</form>

<?php
function sumOfDigits($num) {
    $sum = 0;
    while ($num != 0) {
        $digit = $num % 10;   // For Select last digit
        $sum += $digit;       // add it to sum
        $num = floor($num / 10); // For remove last digit
    }
    return $sum;
}

if (isset($_POST['submit'])) {
    $number = intval($_POST['number']);
    echo "<h3>You entered: $number</h3>";
    $result = sumOfDigits($number);
    echo "<h3>Sum of digits: $result</h3>";
}
?>
</center>
</body>
</html>
