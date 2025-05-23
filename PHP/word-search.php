<?php

function countUppercase($word) {
    return preg_match_all('/[A-Z]/', $word);
}

function findTargetIndices($words, $target) {

    usort($words, function($a, $b) {

        $lenA = strlen($a);
        $lenB = strlen($b);
        if ($lenA !== $lenB) {
            return $lenA - $lenB;
        }

        $upperA = countUppercase($a);
        $upperB = countUppercase($b);
        if ($upperA !== $upperB) {
            return $upperB - $upperA; 
        }

        return strcmp($a, $b);
    });

    $indices = [];
    foreach ($words as $i => $word) {
        if ($word === $target) {
            $indices[] = $i;
        }
    }

    return $indices;
}

$words = ["I", "TWO", "FORTY", "THREE", "JEN", "TWO", "tWo", "Two"];
$target = "TWO";

$result = findTargetIndices($words, $target);

print_r($result); 

?>
