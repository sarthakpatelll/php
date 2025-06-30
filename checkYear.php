<!DOCTYPE html>
<html lang="en">
<body>
    <h2> Check if Year is Leap or Not</h2>
    <form method = "post">Enter a year : <input type="number" name="year" required>
    <input type = "submit" name="check" value="check"> </form>

    <?php 
    
    if (isset($_POST['check'])){
        $year = $_POST['year'];
        if(($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "<p>$year is a <strong>Leap Year</strong></p>";
        } else {
            echo "<p>$year is a <strong> Not a Leap Year</strong></p>";
        }
    }
    ?> 

</body>
</html>