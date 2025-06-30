<!DOCTYPE html>
<html lang="en">
<body>
    <h2> Check if Number is Even or Odd </h2>
    <form method="post"> Enter a number :  <input type="number" name="num" required>
    <input type="submit" name="check" value="Check"></form>

    <?php 
    if(isset($_POST['check'])){
        $num = $_POST['num'];
        if($num%2==0){
            echo "<p>$num is <strong>Even</strong></p>";
        } else {
            echo "<p>$num is <strong>Odd</strong></p>";
        }
    }
    ?>
    
</body>
</html>