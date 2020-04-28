<?php
// array
// $n = "12";
$students = array(
    "rahim",
    "karim",
    "jabbar",
    123564
);

// echo $students[2];
// var_dump($students);

echo count($students);
echo "\n";

$n = count($students);
for($i = 0; $i < $n; $i++){
    echo $students[$i]."\n";
}
echo "\n";


for($i = $n-1; $i >= 0; $i--){
    echo $students[$i]. "\n";
}
echo "\n";
$execute = "I Love Programing";

for($x = 1; $x <= 2; $x++){
    $var = $execute.' ' . $x;
    echo $var."\n";
}

// echo count($group);
$group = [
    "Tanjim",
    "Rupash",
    "Zahid",
    "xyz"
];
$l = count($group);
for($m = 0; $m < $l; $m++){
    echo $group[$m]."\n";
}
echo "==================="."\n";

for($m = $l-1; $m >= 0; $m--){
    echo $group[$m]."\n";
}