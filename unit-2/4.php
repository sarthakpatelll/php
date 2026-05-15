<?php 
if(isset($_COOKIE["visited"])){
    echo "welcome back! thanks for visiting again.";
} else{
    echo "hello! this seems to be your first visit.";
    // set the "visited" cookie for future visits (expire in 1 hour)
    setcookie("visited", "Yes", time() + 3600);
}
?>