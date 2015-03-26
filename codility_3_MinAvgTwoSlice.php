<?php

//http://k2code.blogspot.in/2012/01/given-integer-array-and-number-x-find.html
//https://www.google.ca/search?q=get+array+pairs+O(n)&oq=get+array+pairs+O(n)
$A =  array
(

    0 => 9330
    ,1 => -1185
    ,2 => -9851
    ,3 => 8220
    ,4 => 8786
    ,5 => 1645
    ,6 => 3431
    ,7 => -8322
    ,8 => 5330
    ,9 => -5264
    ,10 => -9384
    ,11 => 5776
    ,12 => -3078
    ,13 => 2466
    ,14 => 2316
    ,15 => -7029
    ,16 => -6339
    ,17 => -7712
    ,18 => -9708
    ,19 => -265
    ,20 => 9298
    ,21 => -8709
    ,22 => 822
    ,23 => -682
    ,24 => 2029
    ,25 => -8222
    ,26 => 1580
    ,27 => -4609
    ,28 => 1129
    ,29 => 2893
    ,30 => -379
    ,31 => -2895
    ,32 => -5017
    ,33 => 8671
    ,34 => -932
    ,35 => 603
    ,36 => -9614
    ,37 => 162
    ,38 => -9885
    ,39 => -7125
    ,40 => -543
    ,41 => -2453
    ,42 => -8917
    ,43 => 1751
    ,44 => -6720
    ,45 => 1147
    ,46 => -7115
    ,47 => 8747
    ,48 => 5420
    ,49 => 9139
    ,50 => -7176
    ,51 => -3892
    ,52 => -9209
    ,53 => -4465
    ,54 => 6131
    ,55 => -6453
    ,56 => -6909
    ,57 => 9095
    ,58 => -6909
    ,59 => 6678
    ,60 => -9179
    ,61 => -2276
    ,62 => -3008
    ,63 => -3166
    ,64 => 6330
    ,65 => -481
    ,66 => 5658
    ,67 => -583
    ,68 => 6347
    ,69 => 7632
    ,70 => -1208
    ,71 => 5622
    ,72 => 6295
    ,73 => -4087
    ,74 => -7523
    ,75 => -6288
    ,76 => -1279
    ,77 => -7611
    ,78 => 596
    ,79 => 6589
    ,80 => -296
    ,81 => 6355
    ,82 => 3128
    ,83 => 2821
    ,84 => -3093
    ,85 => 4053
    ,86 => 6199
    ,87 => -6857
    ,88 => 8160
    ,89 => -4614
    ,90 => -6903
    ,91 => 6810
    ,92 => 4403
    ,93 => 5872
    ,94 => -1067
    ,95 => -8585
    ,96 => -2095
    ,97 => -9046
    ,98 => -4278
    ,99 => -9241
);
//$A = array(
	//4,
    //2,
    //2,
    //5,
    //1,
    //5,
    //8
//);

solution($A);
function solution($A)
{
	$min = PHP_INT_MAX;
	$K = count($A);
	for($i = 0; $i < count($A) - 2; $i++)
	{
		echo $i . ' - ' . ($i + 1).PHP_EOL;
		$T = ($A[$i] + $A[$i + 1]) / 2;
		if ($T < $min)
		{
			$min = $T;
			$K = $i;
		}
		
		echo $i . ' - ' . ($i + 1). ' - ' . ($i + 2).PHP_EOL;
		$T = ($A[$i] + $A[$i + 1] + $A[$i + 2]) / 3;
		if ($T < $min)
		{
			$min = $T;
			$K = $i;
		}
	}
	
	echo $i . ' - ' . ($i + 1).PHP_EOL;
	$T = ($A[$i] + $A[$i + 1]) / 2;
	if ($T < $min)
	{
		$min = $T;
		$K = $i;
	}
	echo $K;
}


function solution1($A) {
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
	
	print_r($B);
	echo $M1;
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
