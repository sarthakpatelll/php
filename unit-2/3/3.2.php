<?php 
//start session
session_start();

// check if the session variable 'loginid' is set.
if(isset($_SESSION["loginid"])){
    echo "Login id is : ". $_SESSION["loginid"];
    }else{
        echo "Session variable 'loginid' is not set.";
    }    
?>