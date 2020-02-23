<?php  
// Name Cookie, Set Cookie Content, Set Expiration Time (10 Min From Now)
setcookie('fruit', 'orange', time()+600);
// Displaying the Cookie Content if set, if not, displaying message
if(isset($_COOKIE['fruit'])) {
echo $_COOKIE['fruit'];
} else {
    echo 'Cookie has not been set!';
}