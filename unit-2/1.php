<?php
// Set a cookie named "username" with value "welcome" that expires in 1 hour
setcookie("username", "welcome", time() + 3600, "/"); 
// Check if the cookie is set and display its value
if(isset($_COOKIE["username"])) {
    echo "Cookie 'username' is set.<br>";
    echo "Value: " . $_COOKIE["username"];
} else {
    echo "Cookie 'username' is not set yet.";
}
?>
