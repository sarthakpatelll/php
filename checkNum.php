<!DOCTYPE html>
<html>
<body>

<h2> check if number is positive, negative , or zero </h2>

<form method ="post">
    Enter a number : <input type="number" name="number" required>
    <input type="submit" name="check" value="check">
</form>

<?php
if(isset($_POST['check'])){
    $number = $_POST['number'];

    if ($number > 0){
        echo "<p>The number $number is <strong>positive</strong>.</p>";
    }
    elseif($number < 0){
        echo "<p>The number $number is <strong>negative</strong>.</p>";
    }
    else{
        echo "<p>The number $number is <strong>zero</strong>.</p>";
    }
}
?>

</body>
</html>