<?php

function countIslandsAndPrint($matrix) {
    $rows = count($matrix);
    $cols = count($matrix[0]);
    $visited = array_fill(0, $rows, array_fill(0, $cols, false));
    $islandCount = 0;

    $directions = [
        [-1,  0], [1,  0], [0, -1], [0, 1],
        [-1, -1], [-1, 1], [1, -1], [1, 1]
    ];

    function dfs($i, $j, &$matrix, &$visited, $rows, $cols, $directions) {
        $visited[$i][$j] = true;
        foreach ($directions as [$dx, $dy]) {
            $ni = $i + $dx;
            $nj = $j + $dy;
            if ($ni >= 0 && $ni < $rows && $nj >= 0 && $nj < $cols &&
                !$visited[$ni][$nj] && $matrix[$ni][$nj] === 1) {
                dfs($ni, $nj, $matrix, $visited, $rows, $cols, $directions);
            }
        }
    }

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            if ($matrix[$i][$j] === 1 && !$visited[$i][$j]) {
                $islandCount++;
                dfs($i, $j, $matrix, $visited, $rows, $cols, $directions);
            }
        }
    }

    // Print output
    foreach ($matrix as $row) {
        foreach ($row as $cell) {
            echo $cell === 1 ? "X" : "~";
        }
        echo "\n";
    }
}

$matrix = [
    [1, 1, 1, 1],
    [0, 1, 1, 0],
    [0, 1, 0, 1],
    [1, 1, 0, 0],
];

countIslandsAndPrint($matrix);
?>
