<?php

$n = 12;

if ($n % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo PHP_EOL;

if ($n % 2 == 0):
    echo "Even Number";
    echo PHP_EOL; //new line or break
    echo "some text";
else:
    echo "Odd Number";
    echo PHP_EOL; //new line or break
    echo "some text++";
endif;
echo PHP_EOL;
switch ($n % 2 == 0):
case 0:
    echo "Even Number";
    break;
default:
    echo "Odd Number";
    endswitch;

    echo PHP_EOL;

    if ($n % 2 == 0):
    ?>
hello
hi

    <?php
else:
    ?>

    <?php
endif;
    ?>