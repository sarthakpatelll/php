<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of First N Numbers</title>
</head>
<body>
<center>
    <h2>Find Sum of First N Natural Numbers</h2>
    <form method="POST">
        <input type="number" name="num" required><p>
        <input type="submit" name="submit" value="Find Sum">
</form>
<?php 

    if(isset($_POST['submit'])){
        $num = $_POST['num'];
            $sum = ($num * ($num + 1)) / 2;
            echo "<p>Sum of first <b>$num</b> natural numbers is: <b>$sum</b></p>";
        }
?>            
</center>    
</body>
</html>