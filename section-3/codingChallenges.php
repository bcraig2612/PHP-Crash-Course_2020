<?php 

// ***** ADDITION *****
$a = 5;
$b = 10;
$answer = $a + $b;
// answer should be 15
echo $answer;
echo "<br>";

// ***** SUBTRACT *****
$c = 20;
$d = 11;
$answer2 = $c - $d;
// answer should be 9
echo $answer2;
echo "<br>";

// ***** MULTIPLY *****
$e = 4;
$f = 3;
$answer3 = $e * $f;
// answer should be 12
echo $answer3; 
echo "<br>";

// ***** DIVISION *****
$g = 54;
$h = 6;
$answer4 = $g / $h; 
// answer should be 9
echo $answer4;
echo "<br>";

// ***** MODULUS OPERATOR *****
$i = 26;
$j = 3;
$answer5 = $i % $j;
// answer should be 2
echo $answer5;
echo "<br>";

// ***** HOW TO FIND A POWER OF A NUMBER USING PHP *****
$base = 11;
$power = 7;
$answer6 = pow($base, $power);
// answer should be 19487171
echo $answer6;
echo "<br>";

// **** AREA - RECTANGLE *****
$length = 10;
$width = 5;
$rectangle = $length * $width;
// answer should be 50
echo $rectangle;
echo "<br>";

// ***** AREA - TRIANGLE *****
$base2 = 12;
$height2 = 3;
$divTwo = 2;
$answer7 = $base2 * $height2 / $divTwo;
// answer should be 18
echo $answer7;
echo "<br>";

// ***** AREA - CIRCLE ***** 
$pi = 3.14;
$radius = 5;
$squared = 2;
// 2 different approached to solve this
$answer8 = $pi * $radius * $radius;
$answer9 = $pi * pow($radius, $squared);
// answer should be 78.5
echo $answer8;
echo "<br>";
echo $answer9;
echo "<br>";

// ***** AREA - TRAPEZIUM *****
$sideA = 10;
$sideB = 8;
$height = 4;
$trapezium = ($sideA + $sideB) * $height / 2;
// answer should be 36
echo $trapezium;
?>