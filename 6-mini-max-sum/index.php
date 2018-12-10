<?php

// INPUT: [4, 7, 2, 8, 9, 4, 26, 5]
// EXPECTED OUTPUT: 39 63

$values = [4, 7, 2, 8, 9, 4, 26, 5];

function miniMaxSum($arr) {
    $reformat = array_filter($arr, function($val) {
        return $val > 0;
    });
    
    sort($reformat);
    $min = $reformat;
    $max = $reformat;
    
    array_shift($min);
    array_pop($max);
    
    $minTotal = array_reduce($min, function ($acc, $val) {
        $acc += $val;
        return $acc;
    });
    
    $maxTotal = array_reduce($max, function ($acc, $val) {
        $acc += $val;
        return $acc;
    });
    
    return print "$maxTotal $minTotal";
}

miniMaxSum($values);