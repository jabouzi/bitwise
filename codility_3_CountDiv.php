<?php

//var_dump(solution(6, 11, 2));
//echo solution(11, 345, 17);
//echo solution(0, 1, 11);
//solution(1, 0, 11);
solution(10, 10, 20);
//solution(10, 10, 5);
//solution(0, 14 ,2);
//echo solution(6, 11, 2);
//solution(0, 2000000000, 2000000000);

function solution($A, $B, $K) {
	//var_dump((int)($B/$K));
	//var_dump((int)(($A - 1) / $K));
	var_dump($B/$K);
	var_dump(($A - 1) / $K);
	//var_dump(round($B/$K));
	//var_dump(round(($A - 1) / $K));
    //var_dump(($B / $K) - ($A - 1) / $K);
    //var_dump((int)round(($B/$K) - ($A - 1) / $K));
    //var_dump(gettype(-1));
    //return (int)($B/$K) + 1) - (int)(($A - 1) / $K + 1;
    $X = intval($B/$K+1);
    $Y = intval((($A - 1) / $K) + 1);
    var_dump($X, $Y);
    return $X - $Y;
}


/*Write a function:

int solution(int A, int B, int K);

that, given three integers A, B and K, returns the number of integers within the range [A..B] that are divisible by K, i.e.:

{ i : A ≤ i ≤ B, i mod K = 0 }

For example, for A = 6, B = 11 and K = 2, your function should return 3, because there are three numbers divisible by 2 within the range [6..11], namely 6, 8 and 10.

Assume that:

A and B are integers within the range [0..2,000,000,000];
K is an integer within the range [1..2,000,000,000];
A ≤ B.
Complexity:

expected worst-case time complexity is O(1);
expected worst-case space complexity is O(1).
*/
