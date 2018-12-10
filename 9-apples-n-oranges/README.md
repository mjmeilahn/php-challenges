# Apples & Oranges

Log how many times a number falls within a set range.

Sam's crappy house is next to an Apple Tree & an Orange Tree - which are constantly dropping their fruits onto his house.

One summer, he went nuts counting all of them which hit his house after a thunderstorm the previous night showered his house with Apples & Oranges.

Help Sam count them and maybe he'll give you some Apples and/or Oranges.


## Example

Numeric values passed to the function represent the starting and ending point of Sam's house.

"s" is the starting point

"e" is the ending point

"a" is the location of the Apple Tree

"o" is the location of the Orange Tree

"apples" is an array of where the apples fell from the Apple tree. Negative values are to the left of the tree - Positive values are to the right of the tree

"oranges" is an array of where the oranges fell from the Orange tree. Negative values are to the left of the tree - Positive values are to the right of the tree

Given that :

$s = 7

$e = 10

$a = 4

$o = 12

$apples = [2, 3, -4]

$oranges = [3, -2, -4]

Our returned results would be: 1, 2

One Apple hit Sam's house.

Two Oranges hit Sam's house.


## Constraints

1 <= $s, $e, $a, $o

$a < $s < $e < $o


## Output Format

Returns a string