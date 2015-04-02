<?php

$A = [3,6,7,4,3,76,5];

function solution($A)
{
	$R = [PHP_INT_MAX, PHP_INT_MAX, PHP_INT_MAX];
	for($i = 0; $i < count($A); $i++)
	{
		//if (!isset($R[$A[$i]])) $R[$A[$i]] = 1;
		//else $R[$A[$i]]++;
		
		if ($i == 0) $R[0] = $A[0];
		else if ($i == 1)
		{
			if ($A[1] < $R[0])
			{
				$R[1] = $R[0];
				$R[0] = $A[1];
			}
			else
			{
				$R[1] = $A[1];
			}
		}
		else if ($i == 2)
		{
			if ($A[1] < $R[0])
			{
				$R[1] = $R[0];
				$R[0] = $A[1];
			}
			else
			{
				$R[1] = $A[1];
			}
		}
	
	//$i = 0;
	//foreach($R as $key => $value)
	//{
		//if ($i >= (count($R) - 3)) echo $key.PHP_EOL;
		//$i++;
	//}
	
	for($i = 0; $i < count($R); $i++)
	{
		echo $i.PHP_EOL;
	}
	
	//print_r($A);
	//print_r($R);
	//var_dump(key(end($R)));
	//var_dump(key(prev($R)));
	//var_dump(key(prev($R)));
	//var_dump(key(end($R))*key(prev($R))*key(prev($R)));
}

solution($A);

//var_dump(end($A));
//var_dump(prev($A));
//var_dump(prev($A));

/*
A non-empty zero-indexed array A consisting of N integers is given. The product of triplet (P, Q, R) equates to A[P] * A[Q] * A[R] (0 ≤ P < Q < R < N).

For example, array A such that:

  A[0] = -3
  A[1] = 1
  A[2] = 2
  A[3] = -2
  A[4] = 5
  A[5] = 6

contains the following example triplets:

        (0, 1, 2), product is −3 * 1 * 2 = −6
        (1, 2, 4), product is 1 * 2 * 5 = 10
        (2, 4, 5), product is 2 * 5 * 6 = 60

Your goal is to find the maximal product of any triplet.

Write a function:

    function solution($A); 

that, given a non-empty zero-indexed array A, returns the value of the maximal product of any triplet.

For example, given array A such that:

  A[0] = -3
  A[1] = 1
  A[2] = 2
  A[3] = -2
  A[4] = 5
  A[5] = 6

the function should return 60, as the product of triplet (2, 4, 5) is maximal.

Assume that:

        N is an integer within the range [3..100,000];
        each element of array A is an integer within the range [−1,000..1,000].

Complexity:

        expected worst-case time complexity is O(N*log(N));
        expected worst-case space complexity is O(1), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.
*/
