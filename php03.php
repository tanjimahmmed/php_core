<?php 
// $name = "Earth";
// $name = "galaxy";
// for information using var_dump
// var_dump($name);
// var_dump($name);

/*$age = 22;
$type = 22.50369;
$typec = null;
var_dump($age);
var_dump($type);
var_dump($typec);*/

/*$name1 = "Md";
$name2 = "Tanjim";
var_dump($name1, $name2);*/

// Types

/*
Integer Int
Double / Float
Boolean
Null
String
Array
Object
Resource
*/

/*$result = true;
var_dump($result);

$name = "Earth";
echo "We're living on {$name}";*/

// $fname = "Isaac";
// $lname = "Newton";
// printf("His Name is %s %s", $fname, $lname) ;
// printf("his %s name is %s %s","full", $fname, $lname);

$planet1 = "Mercury";
$planet2 = "Jupiter";

echo "The smallest planet is ".$planet1." and the biggest planet is ".$planet2."\n";
echo "The Smallest Planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The Smallest Planet is %s and the biggest planet is %s\n",($planet1),($planet2));
printf("The Smallest Planet is %s and the biggest planet is %s\n",strtoupper($planet1),strrev($planet2));