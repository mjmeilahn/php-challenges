<?php

// INPUT $numbers: [26, 0, -3, -85, 73, 43]
// EXPECTED OUTPUT: [0.500000, 0.333333, 0.166667]

$numbers = [26, 0, -3, -85, 73, 43];

function plusMinus($arr) {
    $denom = count($arr);
    $positives = 0;
    $negatives = 0;
    $zeroes = 0;

    foreach ($arr as $i) {
        if ($i === 0) {
            $zeroes++;
        } else if ($i > 0) {
            $positives++;
        } else if ($i < 0) {
            $negatives++;
        }
    }

    $positives = $positives / $denom;
    $negatives = $negatives / $denom;
    $zeroes = $zeroes / $denom;

    $positivePercent = number_format($positives, 6, '.', '');
    $negativePercent = number_format($negatives, 6, '.', '');
    $zeroPercent = number_format($zeroes, 6, '.', '');

    print "$positivePercent \n$negativePercent \n$zeroPercent";
}



return plusMinus($numbers);

