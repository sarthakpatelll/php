<!DOCTYPE html>
<html lang="en">
<body>
    <center>
    <h1>Print All Even Numbers</h1>
    <form method="post">
    <input type="number" name="num" placeholder="Enter a number :"required>
    <input type="submit" name="Print" value="Print"></form>

    <?php 
    if(isset($_POST['Print'])){
        $num = $_POST['num'];
        echo "<h3><p><b>Below We Print All Even Numbers :</b></p></h3>";
        for($i=1;$i<=$num;$i++){
            if($i%2==0){
                echo "<p><strong>$i</strong></p>";
            }
        }
    }
?>
</center>
</body>
</html>