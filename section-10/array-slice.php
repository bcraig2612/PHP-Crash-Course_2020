<?php

$letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

$result = array_slice($letters, 5);

echo "<pre>";
print_r($result);
$result = array_slice($letters, 0, 5);
print_r($result);
$result = array_slice($letters, -5, 5);
print_r($result);
echo "</pre>";