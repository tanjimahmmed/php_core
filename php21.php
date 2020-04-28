<?php
$n = 10;
for($i = $n, $factorial = 1; $i > 1; $i--){
    $factorial = $factorial * $i;
}

printf("Factorial of %d is %d", $n, $factorial);

// echo "\n";
// $t = 20;
// for($o = $t, $factorial = 1; $o > 1; $o--){
//     $factorial *= $o;
// }
// printf("Factorial of %d is %d", $t, $factorial);



