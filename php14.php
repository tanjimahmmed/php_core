<?php
$n = 12;
$r = $n % 2;
switch ($r) {
    case 0:
        switch ($n) {
            case $n > 0:
                echo "$n is a positive even number";
                break;
            case $n < 0;
                echo "$n is a negative number";
                break;
        }
        break;
    default:
        switch ($n) {
            case $n > 0:
                echo "$n is a positive even number";
                break;
            case $n < 0;
                echo "$n is a negative number";
                break;
        }
}
echo "\n";
switch (true){
    case ($r == 0 && $n > 0):
        echo "$n is a positive even number";
    break;
    case ($r == 1 && $n > 0):
        echo "$r is a positive odd number";
    break;
    case ($r == 0 && $n < 0):
        echo "$r a negative even number";
    break;
    case ($r == -1 && $n < 0):
        echo "$r is a negative odd number";
}
