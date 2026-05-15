<?php 
// define an array with 5 numbers
$numbers = array(45,12,78,23,9);
//display original array
echo "Original array : <br>";
foreach($numbers as $num){
    echo $num."<br>";
}
echo "<br><br>Sorted in Ascending Order :<br>";
//sorted array in ascending order
$asc =$numbers;
sort($asc);
foreach($asc as $num){
    echo $num."<br>";
}
echo "<br><br>Sorted in Decending Order :<br>";
$dec = $asc;
rsort($dec);
foreach($dec as $num){
    echo $num."<br>";
}
?> 