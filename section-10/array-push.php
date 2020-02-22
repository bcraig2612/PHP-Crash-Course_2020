<?php

$cities = array('London', 'Paris');

echo "<pre>";

print_r($cities);
// Adds to the end of an array
array_push($cities, 'New York', 'Berlin');

print_r($cities);
// Adds to the beginning of an array
array_unshift($cities, 'Amsterdam', 'Dublin');

print_r($cities);