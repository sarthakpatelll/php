<?php 
$numbers=array(10,20,10,30,20,40,50,30);

echo "Original Array : <br>";

foreach($numbers as $num){
    echo $num."<br>";
}
echo "Array after removing duplicates : <br> ";
//remove duplicate
$uniqueArray = array_unique($numbers);
foreach($uniqueArray as $num){
    echo $num."<br>";
}    
?>
