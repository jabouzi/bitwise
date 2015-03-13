<?php

$A[0] = 3;
$A[1] = 4;
$A[2] = 4;
$A[3] = 6;
$A[4] = 1;
$A[5] = 4;
$A[6] = 4;

$N = 5;

$A[0] = 14;
$A[1] = 32;
$A[2] = 14;
$A[3] = 51;
$A[4] = 60;
$A[5] = 85;
$A[6] = 91;
$A[7] = 99;
$A[8] = 24;
$A[9] = 28;
$A[10] = 14 ;
$A[11] = 3  ;
$A[12] = 22 ;
$A[13] = 101;
$A[14] = 99 ;
$A[15] = 2  ;
$A[16] = 70 ;
$A[17] = 19 ;
$A[18] = 91 ;
$A[19] = 64 ;
$A[20] = 18 ;
$A[21] = 10 ;
$A[22] = 101;
$A[23] = 68 ;
$A[24] = 53 ;
$A[25] = 42 ;
$A[26] = 78 ;
$A[27] = 28 ;
$A[28] = 13 ;
$A[29] = 47 ;
$A[30] = 37 ;
$A[31] = 101;
$A[32] = 67 ;
$A[33] = 12 ;
$A[34] = 27 ;
$A[35] = 101;
$A[36] = 17 ;
$A[37] = 101;
$A[38] = 101;
$A[39] = 77 ;
$A[40] = 24 ;
$A[41] = 42 ;
$A[42] = 101;
$A[43] = 40 ;
$A[44] = 14 ;
$A[45] = 4  ;
$A[46] = 101;
$A[47] = 13 ;
$A[48] = 101;
$A[49] = 101;

$N = 100;

$A[0] = 6;
$A[1] = 6;
$A[2] = 6;
$A[3] = 6;
$A[4] = 6;
$A[5] = 6;

$N = 5;

$A[0] = 2;
$A[1] = 1;
$A[2] = 1;
$A[3] = 2;
$A[4] = 1;

$N = 1;

$A[0] = 21 ;
$A[1] = 7  ;
$A[2] = 14 ;
$A[3] = 21 ;
$A[4] = 14 ;
$A[5] = 21 ;
$A[6] = 18 ;
$A[7] = 5  ;
$A[8] = 5  ;
$A[9] = 21 ;
$A[10] = 14;
$A[11] = 7 ;
$A[12] = 6 ;
$A[13] = 21;
$A[14] = 6 ;
$A[15] = 14;
$A[16] = 18;
$A[17] = 15;
$A[18] = 4 ;
$A[19] = 10;
$A[20] = 19;
$A[21] = 5 ;
$A[22] = 10;
$A[23] = 10;
$A[24] = 12;
$A[25] = 10;
$A[26] = 17;
$A[27] = 4 ;
$A[28] = 16;
$A[29] = 21;

$N = 20;

print_r(solution($N, $A));

function solution($N, $A) {
	$C = [];
	$V = [];
    //for($i = 0; $i < $N; $i++) $C[$i] = 0;
    
    $max = 0;
    $max_counter = 0;
    $temp_max = 0;
    for($i = 0; $i < count($A); $i++)
    {
		//var_dump($A[$i]-1);
		$temp_max = 0;
		if ($A[$i] == $N + 1) 
		{
			$max_counter = $max;
		}
		else if ($A[$i] >= 1 && $A[$i] <= $N)
		{
			if ($max_counter > 0)
			{
				if (!isset($V[$A[$i]-1]))
				{
					$V[$A[$i]-1] = 1;
					$max_counter;
					$C[$A[$i] - 1] = $max_counter + 1;
				}
				else
				{
					$C[$A[$i] - 1]++;
				}
			}
			else
			{
				if (!isset($C[$A[$i]-1])) $C[$A[$i]-1] = 0;
				$C[$A[$i] - 1]++;
			}
			
			if ($C[$A[$i]-1] > $max) $max = $C[$A[$i] - 1];
		}
	}
	
	//print_r($C);
	
	for($i = 0; $i < $N; $i++)
	{
		if (!isset($C[$i])) $C[$i] = 0;
		if (!isset($V[$i])) $C[$i] = $max_counter;
	}
	return $C;
}

/*
You are given N counters, initially set to 0, and you have two possible operations on them:

        increase(X) − counter X is increased by 1,
        max counter − all counters are set to the maximum value of any counter.

A non-empty zero-indexed array A of M integers is given. This array represents consecutive operations:

        if A[K] = X, such that 1 ≤ X ≤ N, then operation K is increase(X),
        if A[K] = N + 1 then operation K is max counter.

For example, given integer N = 5 and array A such that:

    A[0] = 3
    A[1] = 4
    A[2] = 4
    A[3] = 6
    A[4] = 1
    A[5] = 4
    A[6] = 4

the values of the counters after each consecutive operation will be:

    (0, 0, 1, 0, 0)
    (0, 0, 1, 1, 0)
    (0, 0, 1, 2, 0)
    (2, 2, 2, 2, 2)
    (3, 2, 2, 2, 2)
    (3, 2, 2, 3, 2)
    (3, 2, 2, 4, 2)

The goal is to calculate the value of every counter after all operations.

Assume that the following declarations are given:

    struct Results {
      int * C;
      int L;
    }; 

Write a function:

    struct Results solution(int N, int A[], int M); 

that, given an integer N and a non-empty zero-indexed array A consisting of M integers, returns a sequence of integers representing the values of the counters.

The sequence should be returned as:

        a structure Results (in C), or
        a vector of integers (in C++), or
        a record Results (in Pascal), or
        an array of integers (in any other programming language).

For example, given:

    A[0] = 3
    A[1] = 4
    A[2] = 4
    A[3] = 6
    A[4] = 1
    A[5] = 4
    A[6] = 4

the function should return [3, 2, 2, 4, 2], as explained above.

Assume that:

        N and M are integers within the range [1..100,000];
        each element of array A is an integer within the range [1..N + 1].

Complexity:

        expected worst-case time complexity is O(N+M);
        expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.
*/
