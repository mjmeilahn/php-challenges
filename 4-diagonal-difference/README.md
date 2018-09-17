# Diagonal Difference

Return the absolute difference from the summed values within a mathematical Matrix. Returned values are the left diagonal numbers minus the right diagonal numbers.


## Example
Given that Matrix b = [
    [11, 2, 4],
    [4, 5, 6],
    [10, 8, -12]
]

The summed values from the top left to bottom right are:

11 + 5 + (-12) = 4

The summed values from the top right to bottom left are:

4 + 5 + 10 = 19

The absolute difference between these are:

| 4 - 19 | = 15


## Constraints
-100 <= arr[i][j] <= 100


## Output Format
Expects a single positive number.