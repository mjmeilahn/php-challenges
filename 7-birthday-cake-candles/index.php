<?php

// INPUT: [5, 2, 3, 3, 2, 7, 7, 7, 2, 1, 4, 6]
// EXPECTED OUTPUT: 3

$values = [5, 2, 3, 3, 2, 7, 7, 7, 2, 1, 4, 6];

function birthdayCakeCandles($ar) {
    $reformat = array_filter($ar, function ($val) {
        return $val > 0; 
    });

    rsort($reformat);

    $count = 0;

    foreach ($reformat as $val) {
        if ($reformat[0] === $val) {
            $count++;
        }
    }

    return $count;
}

$result = birthdayCakeCandles($values);

echo $result;