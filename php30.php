<?php
$names = [
    "rahim",
    "karim",
    "jabbar",
    123
];

$names[2] = "xyz";

$n = count($names);
for($i = 0; $i < $n; $i++){
    echo $names[$i]."\n";
}
echo "====================="."\n";
// $name = array_pop($names); //last one removed
$name = array_shift($names); // fast data removed

$n = count($names);
for($i = 0; $i < $n; $i++){
    echo $names[$i]."\n";
}

// array_shift();
// array_unshift();
// array_pop();
// array_push();


echo "====================="."\n";

$names[] = "Jamal";

array_push($names, "piku"); //data entry in last
array_unshift($names, "jokar"); //data entry in fast


$n = count($names);
for($i = 0; $i < $n; $i++){
    echo $names[$i]."\n";
}