<?php 

// *** FOR LOOPS ***
for($i = 2; $i <= 20; $i+=2) {
    echo $i . "<br>";
}

// *** WHILE LOOPS ***
$i = 2;
while($i<=20) {
    echo $i . "<br>";
    $i+=2;
}

// ** MULTIPLES CHALLENGE
for($i=6; $i<=60; $i+=6) {
    echo $i . "<br>";
}

$j = 6;
while($j<=60) {
    echo $j . "<br>";
    $j+=6;
}

// ** FIZZ BUZZ **
for($i = 1; $i <= 100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        echo "FIZZ BUZZ <br>";
    } elseif ($i % 3 == 0) {
        echo "FIZZ <br>";
    } elseif ($i % 5 == 0) {
        echo "BUZZ <br>";
    } else {
        echo $i . "<br>";
    }
}

?>