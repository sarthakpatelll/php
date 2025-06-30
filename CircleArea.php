<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Area Of Circle</title>
</head>
<body>
<center>
    <h2>Find Area Of Circle</h2>
    <form method="POST">
        <input type="number" name="num" placeholder="Enter Radius Of Circle" required><p>
        <button type="submit" name="submit">Find</button><br> 
</form>
<?php 
    if(isset($_POST['submit'])){
        $radius = $_POST['num'];{
            $PI=3.14;
            $area = $PI*$radius*$radius;
            echo "The Area Of Circle Is : <b>$area</b>";
        }        
    }
?>          
</center>    
</body>
</html>