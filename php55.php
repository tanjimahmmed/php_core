<?php
$string = "Quick brown Fox fox jumps over the lazy dog";
/*
$replacedString = str_replace('brown', 'Brown', $string);
echo $replacedString;
echo "\n";
echo $string;
$replacedString = str_ireplace('fox', 'red', $string, $count); // upper and lower all replace use str_ireplace
echo $replacedString;
echo PHP_EOL;
echo "Total Replace: {$count}";
*/
/*
$string = str_ireplace('brown', 'red', $string, $count);
$string = str_ireplace('fox', 'cat', $string, $count);
*/
// $string = str_replace(array('fox', 'Fox'), array('red','cat'), $string, $count);
$string = str_ireplace(array('fox', 'Fox'), 'world',$string, $count); //all in one replace
echo $string;
echo PHP_EOL;
echo "Total Replace: {$count}";