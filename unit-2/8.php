<?php 
//define the array
$colors = array("red","blue","green","yellow","orange");

//element to search
$searchcolor = "green";

//check if the element exists in the array
if(in_array($searchcolor,$colors)){
    echo "The color $searchcolor exists in the array.";
}else{
    echo "The color $searchcolor does not exist in the array.";
}
?>