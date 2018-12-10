<?php

// INPUT: 7, 11, 5, 15, [-2, 2, 1], [5, 6]
// EXPECTED OUTPUT: 2
//                  0

$j = 7;
$k = 11;
$l = 5;
$m = 15;
$apples = [-2, 2, 1, 5];
$oranges = [4, 5, 6];


function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // set initial value to ONE if not set OR isset
    $begin = (isset($s) ? $s : 1);
    $end = (isset($t) ? $t : 1);
    $range = [$begin, $end];

    $appleArr = array_map(function ($apple) use (&$a) {
        return $apple + $a;
    }, $apples);

    $orgArr = array_map(function ($orange) use (&$b) {
        return $orange + $b;
    }, $oranges);

    $finalA = array_filter($appleArr, function ($app) use (&$range) {
        return $app >= $range[0] && $app <= $range[1];
    });

    $finalO = array_filter($orgArr, function ($org) use (&$range) {
        return $org >= $range[0] && $org <= $range[1]; 
    });

    print count($finalA);
    print "\n";
    print count($finalO);
}

countApplesAndOranges($j, $k, $l, $m, $apples, $oranges);