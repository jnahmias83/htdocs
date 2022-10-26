<?php
    $a = 5;
    $b = "5";

    echo '$a = 5 <br>';
    echo '$b = "5" <br>';
    echo '$a == $b => ' . ($a == $b) . "<br>";
    echo '$a === $b => ' . ($a === $b) . "<br>";
    echo '$a != $b => ' . ($a != $b) . "<br>";
    echo '$a !== $b => ' . ($a !== $b) . "<br>";

    $d = $e ?? 5;// if $e undefined then $d = 5;
    $f = $f1 ?? $f2 ?? $f3 ?? 5;
    
    echo 1 <=> 1;//if they equal = 0
    echo 1 <=> 2;//if left side < right side = -1
    echo 2 <=> 1;//if left side > right side = 1
?>