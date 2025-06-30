<!DOCTYPE html>
<html>
<body>

<h2> Check factorial of any number... </h2>
<form method="post">
    Enter a number: <input type="number" name="num" required>
    <input type="submit" name="find" value="Find Factorial">
</form>

<?php
if (isset($_POST['find'])) {
    $num = $_POST['num'];
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    echo "<p>Factorial of $num is <strong>$fact</strong></p>";
}
?>
</body>
</html>
