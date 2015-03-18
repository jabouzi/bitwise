<?php

//$A[0] = 1;
//$A[1] = 3;
//$A[2] = 1;
//$A[3] = 4;
//$A[4] = 2;
//$A[5] = 3;
//$A[6] = 5;
//$A[7] = 4;


    //$A[0] = 1;
    //$A[1] = 3;
    //$A[2] = 1;
    //$A[3] = 3;
    //$A[4] = 2;
    //$A[5] = 1;
    //$A[6] = 3;
    
$A = array
(
    0 => 1
);

function solution($X, $A) {
    $T = -1;
    $B = [];
    $S = 0;
    $C = 0;
    if (count($A) == 1) return -1;
    for($i = 0; $i < count($A); $i++)
    {
		if (!isset($B[$A[$i]]))
		{
			$B[$A[$i]] = 1;
			$S += $A[$i];
			$C++;
			if ($C == $X)
			{
				$T = $i;
				break;
			}
		}
	}
	
	if (($X+1)*count($B) / 2 == $S) return $T;
	return -1;
}

var_dump(solution(1, $A));

/*

A small frog wants to get to the other side of a river. The frog is currently located at position 0, and wants to get to position X. Leaves fall from a tree onto the surface of the river.

You are given a non-empty zero-indexed array A consisting of N integers representing the falling leaves. A[K] represents the position where one leaf falls at time K, measured in minutes.

The goal is to find the earliest time when the frog can jump to the other side of the river. The frog can cross only when leaves appear at every position across the river from 1 to X.

For example, you are given integer X = 5 and array A such that:

  A[0] = 1
  A[1] = 3
  A[2] = 1
  A[3] = 4
  A[4] = 2
  A[5] = 3
  A[6] = 5
  A[7] = 4

In minute 6, a leaf falls into position 5. This is the earliest time when leaves appear in every position across the river.

Write a function:

    int solution(int X, int A[], int N); 

that, given a non-empty zero-indexed array A consisting of N integers and integer X, returns the earliest time when the frog can jump to the other side of the river.

If the frog is never able to jump to the other side of the river, the function should return −1.

For example, given X = 5 and array A such that:

  A[0] = 1
  A[1] = 3
  A[2] = 1
  A[3] = 4
  A[4] = 2
  A[5] = 3
  A[6] = 5
  A[7] = 4

the function should return 6, as explained above.

Assume that:

        N and X are integers within the range [1..100,000];
        each element of array A is an integer within the range [1..X].

Complexity:

        expected worst-case time complexity is O(N);
        expected worst-case space complexity is O(X), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.
*/
