<?php

setcookie('fruit', 'apple', time()+600);

if(isset($_COOKIE['fruit'])) {
echo $_COOKIE['fruit'];
} else {
echo 'Cookie has not been set!';
}