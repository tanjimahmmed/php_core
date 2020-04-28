<?php
$name = "Tanjim";

$string01 = "My name is $name \n"; // \t tab space
echo $string01;

$heredoc = <<<EOD
data 1
new line {$name}
more test
EOD;
echo $heredoc;

/*
<<<EOD /== Here doc
EOD;
<<<'EOD' /== Now doc
EOD;
*/