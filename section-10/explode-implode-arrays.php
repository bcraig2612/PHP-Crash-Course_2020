<?php

$string = "John, Sarah, Ken, Ben, Amy";

$names = explode(", ", $string);

echo "<pre>";
print_r($names);
echo "</pre>";

$imploded = implode("|", $names);
echo $imploded;