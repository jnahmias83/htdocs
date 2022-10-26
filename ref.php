<?php
$a = 5;
$b = $a;
$a = 20;
echo '$a = ' . $a . ', $b = ' . $b;

echo "<br>";

$c = 5;
$d =& $c;
$c = 10; 

echo '$c = ' . $c . ', $d = ' . $d;
?>