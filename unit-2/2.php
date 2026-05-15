<?php 

setcookie("welcome","",time()-3600,"/");

if(isset($_COOKIE["welcome"])){
    echo "cookie 'welcome' is still set.Refresh the page to see if its deleted";
}else{
    echo "cookie 'welcome'has been deleted.";
}

?>