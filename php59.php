<?php
$name = "Abul Hoosain 01234567891 abc@gmail.com";
$parts = sscanf($name, "%s %s %11s %s");
// $parts = sscanf($name, "%s %s %11d");
print_r($parts);

sscanf($name, "%s %s %11s", $fname, $lname, $mobile);
echo $fname;
echo PHP_EOL;
$hexColor = "#FF2F44";
sscanf($hexColor, "#%2x%2X%2X", $red, $green, $blue);
echo $red;