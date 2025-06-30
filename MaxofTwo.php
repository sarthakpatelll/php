<!DOCTYPE html>
<html lang="en">
<body>
    <h2>Find max of two Number</h2>
    
    <form method="post">
        Enter first number :  <input type="number" name="num1" required><br>
        Enter second number :  <input type="number" name="num2" required><br>
        <input type="submit" name="compare" value="Find maximum"></form>

<?php 
    if(isset($_POST['compare'])){
        $a = $_POST['num1'];
        $b = $_POST['num2'];

        if($a>$b){
            echo "Maximum number is <strong>$a</strong>";
        }elseif($a<$b){
            echo "Maximum number is <strong>$b</strong>";
        }else{
            echo "number <strong>$a</strong> is equal";
        }
    }
?>

</body>
</html>