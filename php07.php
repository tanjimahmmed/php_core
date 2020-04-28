<?php
// Printf magic

$fname = "Issac";
$lname = "Newton";
$middlename = "nothing";

printf('His Name is %3$s %2$s %1$s', $fname, $middlename ,$lname);

echo "\n";

printf('The Binary equivalent of %1$d is %1$d', 12);
echo "\n";

$n = 45.123;
printf("%.2f", $n);
echo "\n";

$t = 123; // 0123
$s = 23; // 0023

printf("%04d \n", $t);
printf("%04d \n", $s);

$x = 123.5698; // 0123
$y = 23.333; // 0023

printf("%08.2f \n", $t);
printf("%08.2f \n", $s);

$name1 = "tanjim";
$name2 = "rupash";
$name3 = "zahid";

printf("Our Team Member %s %s %s", ucfirst($name1), ucfirst($name2), ucfirst($name3));
echo "\n";
$parson1 = "Tanjim Ahmmed";
$parson2 = "Rupash Das";
$parson3 = "Zahid Ahmmed";

printf("%013s \n", $parson1);
printf("%013s \n", $parson2);
printf("%013s \n", $parson3);