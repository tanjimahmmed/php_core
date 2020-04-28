<?php
/*
$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

function square($n){
    printf("Square of %d is %d \n", $n, $n*$n);
}

array_walk($numbers,'square');
*/

/*
$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

function cube($n){
    return $n*$n*$n;
}

$newArray = array_map('cube', $numbers);
print_r($numbers);
print_r($newArray);
*/
$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

function even($n){
    return $n%2==0;
}

function odd($n){
    return $n%2==1;
}

$evenNumbers = array_filter($numbers, 'even'); // callback function
$oddNumbers = array_filter($numbers, 'odd'); // callback function

print_r($evenNumbers);
print_r($oddNumbers);

$persons = array('sujon','kabir','sabab','selim','roni','jamal','kamal','sayma');

function filterBys($name){
    return $name[0]=='s';
}

$newPersons = array_filter($persons, 'filterBys');
print_r($newPersons);