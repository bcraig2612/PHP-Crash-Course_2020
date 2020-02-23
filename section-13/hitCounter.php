<?php

session_start();

// If session has been set, Increase By 1
// Echo Message 
if(isset($_SESSION['hits'])) {
    $_SESSION['hits']++;
    echo "You have visited the page " . $_SESSION['hits'] . " times";
// If Not Set Then Set Session
// = 1 
// Echo Message
} else {
    $_SESSION['hits'] = 1;
    echo "This is the first time you have visited this page";
}