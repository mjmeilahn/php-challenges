<?php

// INPUT: $a = 6
// EXPECTED OUTPUT:
//               #
//              ##
//             ###
//            ####
//           #####
//          ######

$a = 6;

function staircase($n) {
    if ($n > 0) {
        $str = '';

        for ($i = 1; $i <= $n; $i++) {
            $str = str_repeat(' ', $n - $i);
            $str .= ($i !== 1) ? str_repeat('#', $i) : '#';
            print "$str\n";
        }
    }
}

staircase($a);