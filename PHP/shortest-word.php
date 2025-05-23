<?php

function shortestWordLength($s) {
    
    $words = explode(" ", $s);
    $minLength = strlen($words[0]);

    foreach ($words as $word) {
        $length = strlen($word);
        if ($length < $minLength) {
            $minLength = $length;
        }
    }

    return $minLength;
}

echo "Output 1: " . shortestWordLength("TRUE FRIENDS ARE ME AND YOU") . "\n";
echo "Output 2: " . shortestWordLength("I AM THE LEGENDARY VILLAIN");

?>