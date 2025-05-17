<?php
// Define an array of PHP functions for quick access
function echo_string($string) {
    $text = "\n";
    while (true) { 
        $random = rand(100000, 999999);
        if ($random % 10 == 0) {
            break; 
        }
        $random = str_pad((int)$random . " ", 4, ' ', STR_PAD_LEFT); 
    }  
    return "<p>" . $text . echo_string($string) . "</p>";
}

echo_string("Hello, world!");
