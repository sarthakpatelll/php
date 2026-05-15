<?php 
$number=array(45,12,78,5,33);
$min=min($number);
$max=max($number);

echo "array elements : ";
foreach($number as $num){
    echo $num."   ";
}

echo "<br>Maximum Value : ".$min;
echo "<br>Minimum Value : ".$max;
?>