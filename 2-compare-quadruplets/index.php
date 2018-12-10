<?php

// INPUT $a: [5, 6, 7, 4]
// INPUT $b: [3, 6, 10, 7]

// EXPECTED OUTPUT: [1, 2]

$arrA = [5, 6, 7, 4];
$arrB = [3, 6, 10, 7];

function compareQuadruplets($a, $b) {
    $aValues = 0;
    $bValues = 0;
    $final = [];

    // based on comparison, increment counters
    for ($i = 0; $i < 4; $i++) {
        if ($a[$i] > $b[$i]) {
            $aValues++;
        } else if ($b[$i] > $a[$i]) {
            $bValues++;
        }
    }

    array_push($final, $aValues, $bValues);
    return $final;
}


compareQuadruplets($arrA, $arrB);