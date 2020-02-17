<?php

echo time();
echo "<br>";

$date = strtotime('1st January 2021');
$seconds = $date - time();
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = $hours / 24;

echo ceil($days) . " days. <br>";

date_default_timezone_set('America/Phoenix');

$christmas = strtotime('December 25');
$time = time();
$days = ceil(($christmas - $time)/60/60/24);

echo "The number of days until Christmas is " . $days . ".";

?>