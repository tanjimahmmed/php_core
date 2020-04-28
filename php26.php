<?php
// লুপ দিয়ে ফিবোনাচ্ছি প্রিন্ট করা।
// 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584

$veryold = 0;
$old = 1;
$new = 1;

for($i = 0; $i < 10; $i++){
    echo "$veryold"." ";
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
} 
?>
initial
v = 0;
o = 1;
n = 1;

loop 1
v = 1;
o = 1;
n = 1;

loop 2
v = 1;
o = 1;
n = 2;

loop 3
v = 2;
o = 2;
n = 3;

loop 4
v = 2;
o = 3;
n = 5;

loop 5
v = 3;
o = 5;
n = 8;

loop 6
v = 5;
o = 8;
n = 13;

loop 6
v = 8;
o = 13;
n = 21;

loop 7
v = 13;
o = 21;
n = 34;