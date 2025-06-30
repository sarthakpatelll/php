<!DOCTYPE html>
<html lang="en">
<head>
    <title> Generate Multiplication Table</title>
</head>
<body>
    <center>
    <h2>Generate Multiplication Table Of Any Number</h2>
<form method="post">
    <input type="number" name="number" required>
    <button type="submit" name="generate">Show Table</button>
</form>

<?php
if (isset($_POST['generate'])) {
    $n = $_POST['number'];
    echo "<h3>Multiplication Table of $n</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "<br>";
    }
}
?>
</center>
</body>
</html>
