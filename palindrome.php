<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <center>
    <h2>Check if a word is a Palindrome</h2>
    
    <form method="post">
        Enter Text :  <input type="text" name="text" required><br><br>
        <input type="submit" name="check" value="Check"></form>

<?php 
    if(isset($_POST['check'])){
        $input = $_POST['text'];
        
        $clean = strtolower(str_replace(' ','',$input));
        $reversed = strrev($clean);

        if($clean==$reversed){
            echo "<p style = 'color: green'>Yes, <b>$input</b> is a palindrome.";
        }else{
            echo "<p style = 'color: red'>No, <b>$input</b> is not palindrome.";
        }
    }
?>
</center>
</body>
</html>