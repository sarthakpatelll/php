<?php 
$a=10;
$b=5;
# " && " AND (both true)
echo "$a & $b is equal AND $a is less than $b : "; echo $a==$b && $a<$b;
echo "<br> $a & $b is not equal AND $a is greater than $b : "; echo $a!=$b && $a>$b;

# " ! " NOT (reverse true/false)
echo "<br> $a is greater than $b : "; echo !$a<$b;
echo "<br> $a is less than $b : "; echo !$a>$b;

?>