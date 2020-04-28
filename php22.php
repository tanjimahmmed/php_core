<?php
$n = 5;
$result = 1;
for ($i = $n; $i > 1; $i--) {
    $result = $result * $i;
}
echo "Factorial of {$n} is {$result} \n";

echo "\n";

$j = 1;
for ($n = 1; $n <= 10; $n++) {
    $result = 1;
    for ($i = $n; $i > 1; $i--) {
        $result = $result * $i;
        $j++;
    }
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of operations \n";

$result = 1;
$j = 1;
for ($n = 1; $n <= 10; $n++) {
    $result = $result * $n;
    $j++;
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of Operation \n";

