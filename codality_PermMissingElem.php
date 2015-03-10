<?php

$A[0] = 2;
$A[1] = 3;
$A[2] = 1;
$A[3] = 5;

function solution($A) {
    $sum = array_sum($A);
    return (count($A) + 1)*(count($A) + 2) / 2 - $sum;
}
echo solution($A);
