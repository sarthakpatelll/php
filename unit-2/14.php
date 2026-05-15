<?php 
//define an array
$color =array("red","blue","green","red","yellow","red","blue");
//define the value to count
$searchvalue = "red";

$counts = array_count_values($color);
if(isset($counts[$searchvalue])){
    echo "The value '$searchvalue' appear ".$counts[$searchvalue]." times in the array.";
}else{
    echo "The value '$searchvalue' does not appear in the array.";
}
?>