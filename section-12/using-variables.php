<?php 

function add() {
    global $c;
    $a = 1;
    $b = 2;
    $sum = $a + $b + $c;
    echo $sum;
}

$c = 5;
add();

?>