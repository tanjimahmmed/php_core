<?php
// spaceship operator
$x = 7;
$y = 5;

function graterOrSmaller($x, $y){
    if($x > $y){
        return 1;
    }else if($x == $y){
        return 0;
    }else{
        return -1;
    }
}
if (graterOrSmaller($x, $y) == 1){
    echo "{$x} is grater than {$y}";
}else if(graterOrSmaller($x, $y) == 0){
    echo "{$x} is equal to {$y}";
}else if(graterOrSmaller($x, $y) == -1){
    echo "{$x} is smaller than {$y}";
}

echo "\n";
// in php 7.0

$result = $x <=> $y;
if($result == 1){
    echo "{$x} is grater then {$y}";
}else if($result == 0){
    echo "{$x} is equal to {$y}";
}else if($result == -1){
    echo "{$x} is smaller then {$y}";
}
