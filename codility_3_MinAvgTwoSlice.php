<?php

//http://k2code.blogspot.in/2012/01/given-integer-array-and-number-x-find.html

function solution($A) {
    $X = 0;
	$Y = 1;
	$M1 = PHP_INT_MAX;
	$M2 = count($A);
	$C = (count($A)*(count($A) - 1)) / 2;
	$B = [];
	for($i = 0; $i < $C; $i++)
	{
		if (($Y - $X) == 1)
		{
			$B[$X.'-'.$Y] = ($A[$X] + $A[$Y]) / 2;
		}
		else
		{
			$B[$X.'-'.$Y] = ($B[$X.'-'.($Y -1)] * (($Y-1) - $X + 1) + $A[$Y]) / ($Y - $X + 1);
		}
		
		if ($B[$X.'-'.$Y] < $M1)
		{
			$M2 = $X;
			$M1 = $B[$X.'-'.$Y];
		}
		
		if ($Y < count($A) - 1)
		{
			$Y++;
		}
		else
		{
			$X++;
			$Y = $X + 1;
		}
	}

	return $M2;

}


/*A non-empty zero-indexed array A consisting of N integers is given. A pair of integers (P, Q), such that 0 ≤ P < Q < N, is called a slice of array A (notice that the slice contains at least two elements). The average of a slice (P, Q) is the sum of A[P] + A[P + 1] + ... + A[Q] divided by the length of the slice. To be precise, the average equals (A[P] + A[P + 1] + ... + A[Q]) / (Q − P + 1).

For example, array A such that:

    A[0] = 4
    A[1] = 2
    A[2] = 2
    A[3] = 5
    A[4] = 1
    A[5] = 5
    A[6] = 8
contains the following example slices:

slice (1, 2), whose average is (2 + 2) / 2 = 2;
slice (3, 4), whose average is (5 + 1) / 2 = 3;
slice (1, 4), whose average is (2 + 2 + 5 + 1) / 4 = 2.5.
The goal is to find the starting position of a slice whose average is minimal.

Write a function:

int solution(int A[], int N);

that, given a non-empty zero-indexed array A consisting of N integers, returns the starting position of the slice with the minimal average. If there is more than one slice with a minimal average, you should return the smallest starting position of such a slice.

For example, given array A such that:

    A[0] = 4
    A[1] = 2
    A[2] = 2
    A[3] = 5
    A[4] = 1
    A[5] = 5
    A[6] = 8
the function should return 1, as explained above.

Assume that:

N is an integer within the range [2..100,000];
each element of array A is an integer within the range [−10,000..10,000].
Complexity:

expected worst-case time complexity is O(N);
expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).
Elements of input arrays can be modified.*/
