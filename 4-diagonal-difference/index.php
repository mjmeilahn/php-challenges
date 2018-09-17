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

    foreach($arr as $val) {
        $left[] = $val[$count];
        $count++;
    }

    $count = 0;
    $reversed = array_reverse($arr);

    foreach($reversed as $val) {
        $right[] = $val[$count];
        $count++;
    }

    $Ltotal = array_reduce($left, function($acc, $val) {
        $acc += $val;
        return $acc;
    });

    $Rtotal = array_reduce($right, function($acc, $val) {
        $acc += $val; 
        return $acc;
    });

    return print abs($Ltotal - $Rtotal);
}


diagonalDifference($matrix);