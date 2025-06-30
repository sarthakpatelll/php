<!DOCTYPE html>
<html lang="en">
<body>
    <center>
    <h2>Find Minimum of two Number</h2>
    <form method="post">
        Enter first number :  <input type="number" name="num1" required><br><br>
        Enter second number :  <input type="number" name="num2" required><br><br>
        <input type="submit" name="compare" value="Find Minimum"></form><br>

<?php 
    if(isset($_POST['compare'])){
        $a = $_POST['num1'];
        $b = $_POST['num2'];

        if($a>$b){
            echo "Minimum number is <strong>$b</strong>";
        }elseif($a<$b){
            echo "Minimum number is <strong>$a</strong>";
        }else{
            echo "number <strong>$a</strong> is equal";
        }
    }
?>
</center>
</body>
</html>