<?php
 
/**
 * Exercise: Sum of the squares of odd numbers
 *
 * Problem:
 * Calculate the sum of the squares of all odd numbers from 1 to 20,
 * using a single nested chain of array_filter -> array_map -> array_reduce.
 *
 * Expected result: 1330
 *
 * Notes:
 * - Nested calls are written from the outside in, but they run from the
 *   inside out: range -> filter -> map -> reduce.
 * - array_reduce starts with 0 because 0 is the neutral element of addition.
 */
 
$numbers = range(1, 20);
 
$result = array_reduce(
    array_map(
        fn($n) => $n * $n,                              // step 2: square each number
        array_filter($numbers, fn($n) => $n % 2 !== 0)  // step 1: keep odd numbers only
    ),
    fn($carry, $n) => $carry + $n,                      // step 3: add everything up
    0                                                   // initial value
);
 
echo $result; // 1330