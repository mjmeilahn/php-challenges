# Grading Students

Round up a set of numbers within a set range.

Every student receives a grade from 0 to 100.
Any $grade less than 40 is a failing grade.

If the difference between the grade and the next multiple of 5 is less than 3, round the grade up to the next multiple of 5.

If the value of the $grade is less than 38, no rounding occurs as the result will still be a failing grade.


## Example

Given that $grade = 84, it will be rounded to 85 but if $grade is 29, it will not be rounded because the rounding would result in a number that is less than 40.


## Constraints

0 <= $grades[i] <= 100

## Output Format

Expected return is an array.