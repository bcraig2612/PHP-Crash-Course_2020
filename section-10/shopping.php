<?php 

// Check If Form Submitted
if(isset($_POST['submit'])) {
    // Assign Variables (Total & Incrementor)
    $number = $_POST['cc'];
    $total = 0;
    $i = 1;
    // Get Last 4 Digits
    $last4 = substr($number, -4, 4);
    // Split String Into Array
    $number = str_split($number);
    // Reverse Array
    $number = array_reverse($number);
    // Loop Through Array & Calculate
    foreach($number as $digit) {
        // If Even Number   
        if($i % 2 == 0) {
            // Multiply Digit By 2 
            $digit *= 2;
            // If > 9 
            if($digit > 9) {
                // Subtract 9 
                $digit -= 9;
            }
        }
        // Total = Total + Digit
        $total += $digit;
        // Increase Incrementor By 1 
        $i++;
    }
    // Check If Divisible By 10 
    if($total % 10 == 0) {
        // Display Message
        echo "Your credit card number ending in " . $last4 . " is valid";
    } else {
        echo "Your credit card number ending in " . $last4 . " is invalid";
    }
}

?>