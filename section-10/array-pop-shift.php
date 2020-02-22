<?php

$cities = ["London", "Paris", "Amsterdam", "New York"];

$lastCity = array_pop($cities);

echo $lastCity;

echo "<br>";

print_r($cities);

$firstCity = array_shift($cities);

echo "<br>";

echo $firstCity;

echo "<br>";

print_r($cities);