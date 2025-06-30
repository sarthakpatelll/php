<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squre and Cube Finder</title>
</head>
<body>
    <center>
    <h2>Find Squre and Cube</h2>
    <form method="POST">
        <input type="number" name="num" required>
        <input type="submit" name="submit" value="Find">
</form>
    <?php
    
    if(isset($_POST['submit'])){
        $num=$_POST['num'];{
            $squre = $num*$num;
            $cube = $num*$num*$num;

            echo "<br><b>Number : $num<b>";
            echo "<br><b>Squre : $squre<b>";
            echo "<br><b>Cube : $cube<b>";
        }
    }
    ?>    
</center>    
</body>
</html>