<?php 

// *** GENERATE RANDOM NUMBER BETWEEN 1 - 100
$randomNumber = rand(1, 100);
echo $randomNumber;
echo "<br>";

// *** COIN FLIP ***
$coinFlip = rand(1, 2);
if($coinFlip == 1) {
    echo "HEADS <br>";
} else {
    echo "TAILS <br>";
}

// *** COIN FLIP Part 2 ***
$heads = 0;
$tails = 0;

for ($i = 1; $i <= 100; $i++) {
    $number = rand(1, 2);
    if($number == 1) {
        echo "HEADS";
        echo "<br>";
        $heads++;
    } else {
        echo "TAILS";
        echo "<br>";
        $tails++;
    }
}
echo "There were " . $heads . " heads and " . $tails . " tails.";

?>