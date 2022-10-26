<?php 
    $email = "   kenny@gmail.com    ";
    echo "trim " . trim($email) . "<br>";
    $password = "AAAA!!!!AAAA";
    echo "trim " . trim($password, "A") . "<br>";

    $str = 'HELLO word!';
    echo "str_replace ".str_replace('Hello',"Apple",$str).'<br/>';
    echo "str_ireplace ".str_ireplace('Hello',"Apple",$str).'<br/>';
    echo "str_ireplace ".str_ireplace('Hello',"Apple",$str).'<br/>';

    $str = "Something Something";
    echo "strlen " . strlen($str) . "<br>";
    echo "strtoupper " . strtoupper($str) . "<br>";
    echo "strtolower " . strtolower($str) . "<br>";
    
    $str = "Something interesting";
    echo "strpos " . strpos($str,"interesting") . "<br>";

    $str = "something Interesting";
    echo "stripos " . stripos($str, "interesting") . "<br>";
?>