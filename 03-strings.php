<?php
    $str = "Rohit";
    echo $str . "<br>";
    $len = strlen($str);
    echo "The length of the string is " . $len . "<br>";
    echo "The number of words in the string is " . str_word_count($str) . "<br>";
    echo "The reverse of the string is " . strrev($str) . "<br>";
    echo "The search for in this string is " . strpos($str, "oh") . "<br>";
    

?>