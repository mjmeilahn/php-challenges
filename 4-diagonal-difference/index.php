<?php


// INPUT: [ [5, 3, -3], [7, 14, 0], [-10, 6, 4] ];
// EXPECTED OUTPUT:22

$matrix = [
    [5, 3, -3],
    [7, 14, 0],
    [-10, 6, 4]
];

function diagonalDifference($arr) {
    $left = [];
    $right = [];
    $count = 0;

    // add all top-left to bottom-right diagonal values inside an array
    foreach($arr as $val) {
        $left[] = $val[$count];
        $count++;
    }

    // reset the counter
    $count = 0;

    // reverse array to store remaining values
    $reversed = array_reverse($arr);

    // add all top-right to bottom-left diagonal values inside an array
    foreach($reversed as $val) {
        $right[] = $val[$count];
        $count++;
    }

    // combine values in a reducer
    $Ltotal = array_reduce($left, function($acc, $val) {
        $acc += $val;
        return $acc;
    });

    $Rtotal = array_reduce($right, function($acc, $val) {
        $acc += $val; 
        return $acc;
    });

    // print absolute difference
    return print abs($Ltotal - $Rtotal);
}


diagonalDifference($matrix);