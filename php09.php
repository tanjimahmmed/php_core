<?php
/*
$n = 12;
if($n %2 == 0){
echo "$n is even number";
}else{
echo "$n is odd number";
}
echo "\n";

if( $n > 10){
echo "$n is bigger 10";
}
echo "\n";
// logical operator

$n = 12;
$m = 10;
if($n != $m){
echo "They Both are not same";
}
 */
// == != > < >= <=

$Tanjim = 10000;
$Rupash = 10000;

if ($Tanjim >= $Rupash) {
    echo "Tanjim has Same or more money then Rupash";
} elseif ($Tanjim > $Rupash) {
    echo "Tanjim has more money then Rupash";
} elseif ($Tanjim < $Rupash) {
    echo "Tanjim has less money then Rupash";
} elseif ($Tanjim == $Rupash) {
    echo "Tanjim and Rupash has same amount of money";
}

echo "\n";

$age = 18;

/*
if($age >= 18 && $age <= 22){
echo "This person is adult";
}else{
echo "The Person is not adult";
}
 */

if ($age >= 18 && $age <= 22) {
    echo "This person is adult";
} elseif ($age >= 18 && $age <= 22) {
    echo "The Person is not adult";
} else {
    echo "The Person is not allow";
}

echo "\n";

$food = "apple";

if ("tuna" == $food || "salmon" == $food) {
    echo "{$food} has vitamin D";
} elseif ("apple" == $food) {
    echo "{$food} doesn't contain vitamin D";
} else {
    echo "We don't know if {$food} contains vitamin D";
}
