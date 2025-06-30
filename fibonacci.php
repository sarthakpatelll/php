<!DOCTYPE html>
<html lang="en">
<body>
    <center>
    <h2>Print Fibonacci Series</h2>
    
    <form method="post">
        Enter any number :  <input type="number" name="num" required><br><br>
        <input type="submit" name="Generate" value="Generate"></form>

<?php 
    if(isset($_POST['Generate'])){
        $limit = $_POST['num'];
        $a = 0;
        $b = 1;

        echo "<p>Fibonacci series up to $limit : </p>";
        echo "<br>";

        while($a <= $limit){
        echo $a." ";
        $next = $a+$b;
        $a = $b;
        $b = $next;
        }
    }
?>
</center>
</body>
</html>