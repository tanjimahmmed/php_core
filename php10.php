<?php
// 1 - divisible by 4 ?
// 2 - divisible by 100 ?
// 3 - divisible by 400 ?
$year = 2020;

if( $year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0 ){
    echo "{$year} is a leap year"; 
}elseif( $year % 4 == 0 && $year % 100 == 0 ){
    echo "{$year} is not a leap year";
}elseif( $year % 4 == 0 ){
    echo"{$year} is a leap year ";
}else{
    echo "{$year} not a leap year";
}

echo "\n";

if(true || false){
    echo "wow";
}

echo "\n";

if( $year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is a not leap year";
}