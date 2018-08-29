<?php 


// INPUT: [6, 2, 8, 24, 7, 2]
// EXPECTED OUTPUT: 49


$numbers = [6, 2, 8, 24, 7, 2];

function simpleArraySum($ar) {
    return array_reduce($ar, function($acc, $val) {
        return $acc + $val;
    });
}

return print simpleArraySum($numbers);

?>