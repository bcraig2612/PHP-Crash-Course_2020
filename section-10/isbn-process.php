<?php

// Check if the form is being submitted
if(isset($_POST['submit'])) {
    // Assign Post Variables
    $isbn = $_POST['isbn'];
    // total variable, incrementor
    $total = 0;
    $i = 1;
    // split the string
    $digits = str_split($isbn);
    // loop through the array 
    foreach($digits as $digit) {
        // update the total = digit * 1, 2, 3, etc.
        $total += $digit * $i;
        $i++; 
    }
    // check if divisible by 11
    if($total % 11 == 0) {
        // echo message
        echo "valid";
    } else {
        echo "invalid";
    }
}