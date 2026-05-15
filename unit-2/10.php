<?php 
//create an array
$sub = array("math","science","english","history","computer");
//display using for loop
echo "Display using for loop :<br>";
for ($i = 0; $i < count($sub); $i++) {
    echo $sub[$i]."<br>";
    }
//Display using foreach loop    
echo "<br>Display using foreach loop :<br>";
foreach($sub as $subs){
    echo $subs."<br>";
} 
?>