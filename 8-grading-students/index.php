<?php

// INPUT: [27, 84, 83, 89, 48, 75, 68, 40]
// EXPECTED OUTPUT: [27, 85, 85, 90, 50, 75, 70, 40]

$grades = [27, 84, 83, 89, 48, 75, 68, 40];

function gradingStudents($grades) {
    if (count($grades) <= 60) {
        $final = [];
        $filtered = array_filter($grades, function($grade) {
            return $grade >= 0;
        });

        return array_map(function($grade) use (&$final) {
            if ($grade >= 38) {
                if ($grade % 5 === 3) {
                    $grade += 2;
                } else if ($grade % 5 === 4) {
                    $grade += 1;
                }
            } 

            return $final[] = $grade;
        }, $filtered);
    }
}

$result = gradingStudents($grades);
print_r($result);