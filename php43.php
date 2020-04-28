<?php
$numbers1 = array(1,2,3,66,54,74,99,44,30);
$numbers2 = array(22,14,20,30,71,33,2,1,);

$fruits1 = array("a"=>"apple","b"=>"banana","c"=>"lemon");
$fruits2 = array("d"=>"pineapple","b"=>"malta","g"=>"grapes","c"=>"lemon");

$common = array_intersect($numbers1, $numbers2);
// $commonf = array_intersect($fruits2, $fruits1);
$commonf = array_intersect_assoc($fruits1, $fruits2); // key 
print_r($common);
print_r($commonf);

// $diff = array_diff($numbers1, $numbers2); // what not exist in snd number array
$diff = array_diff($numbers2, $numbers1); // what not exist in snd number array
$difff = array_diff($fruits2, $fruits1); // what not exist in snd number array
$diffe = array_diff_assoc($fruits1, $fruits2); // what not exist in snd number array
print_r($diff);
print_r($difff);
print_r($diffe);