# Compare Quadruplets

A social media website keeps track of how many positive & negative reviews critics leave for movies. 

A movie company wants to reach as many audiences possible by hiring you to write a program that will compare critic's reviews against one another to see which critic is considered more "upbeat" - and bribe them with fancy gifts, limos, cruises, etc.

Alice & Bob review movies together on a scale from 1 - 10.
Their reviews are contained within seperate arrays.

Return a numeric array of how many movies received a higher review than their counterpart - do not increment the count if both movies received the same review.

Alice's reviews are at the start of the returned array.
Bob's reviews are at the end of the returned array.

## Example
Given that a = [7, 8, 9, 10].

Also given that b = [9, 8, 7, 5].

Alice's first review is less than Bob's review,
so Bob has one positive review in comparison.

Alice's second review is the same as Bob's review,
both are not considered as positive reviews.

Alice's third & last reviews are more than Bob's review,
so Alice has two positive reviews in comparison.

Return result from this is [2, 1]. Alice is the chosen favorite by the film company.

## Constraints
1 <= a[i] <= 10

1 <= b[i] <= 10

## Output Format
Return an array of two integers denoting the respective comparison points earned by Alice and Bob.