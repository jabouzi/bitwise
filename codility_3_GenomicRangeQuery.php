<?php

//function prefix_sums($A, $mapping):
    //$n = strlen($A)
    //$sums = [];
    //foreach(range(1, $n) as $k):
        //$sums[$k] = $sums[$k - 1];
        //$sums[$k][$mapping[$A[$k - 1]] - 1] += 1;
    //return $sums
    //
//function get_slice_sum(Qi, Pi):
    //slice_sum = [0] * len(Qi)
    //for i in xrange(len(Qi)):
        //slice_sum[i] = Qi[i] - Pi[i]
    //return slice_sum
    //
//function solution(S, P, Q):
    //$mapping = ['A' => 1, 'C' => 2, 'G' => 3, 'T' => 4];
    //sums = prefix_sums(S, $mapping)    
    //result = [0] * len(P)
    //
    //for i in xrange(len(P)):
        //slice_sum = get_slice_sum(sums[Q[i] + 1], sums[P[i]])
        //if slice_sum[0] != 0:
            //result[i] = 1
        //elif slice_sum[1] != 0:
            //result[i] = 2
        //elif slice_sum[2] != 0:
            //result[i] = 3
        //else:
            //result[i] = 4
            //
    //return result


solution('CAGCCTA', [2,5,0], [4,5,6]);

function solution($S, $P, $Q)
{
	$Z = ['A' => 1, 'C' => 2, 'G' => 3, 'T' => 4];
	//$R = [];
	$P1 = [];
	$Q1 = [];
	$V1 = [];
	$V2 = [];
	for($i = 0; $i < count($P); $i++)
	{
		$P1[$P[$i]][] = $i;
		$Q1[$Q[$i]][] = $i;
		$R[] = PHP_INT_MAX;
	}
	
	for($i = 0; $i < strlen($S); $i++)
	{
		if (isset($P1[$i]))
		{
			//echo $i.PHP_EOL;
			//print_r($P1[$Z[$S[$i]]]);
			foreach($P1[$i] as $key => $val)
			{
				$V1[$val] = 1;
				if ($Z[$S[$i]] < $R[$key]) $R[$key] = $Z[$S[$i]] ;
			}
		}
		
		if (isset($Q1[$i]))
		{
			foreach($Q1[$i] as $key => $val)
			{
				$V2[$val] = 1;
				if ($Z[$S[$i]] < $R[$key]) $R[$key] = $Z[$S[$i]] ;
			}
		}
		
		foreach($R as $key => $val)
		{
			if (isset($V1[$key]) && !isset($V2[$key]))
			{
				//echo $key. " -> " .  $S[$i] . "\n";
				if ($Z[$S[$i]] < $R[$key]) $R[$key] = $Z[$S[$i]] ;
			}
		}
		
		//print_r($V);
		//print_r($R);
		//if (!isset($V[$i])) $V[$i] = 0;
		//else $V[$i]++;
		//
		//if (isset($P1[$i]))
		//{
			//$min =
		//}
		//if (isset($P1[$Z[$S[$i]]])) echo $P1[$Z[$S[$i]]]."\n";
	}
	//print_r($P1);
	//print_r($Q1);
	print_r($V1);
	print_r($V2);
	print_r($R);
}

function slice_sum($P, $x, $y)
{
	return $P[$y + 1] - $P[$x];
}

function prefix_sums($S)
{
	$A = ['A' => 1, 'C' => 2, 'G' => 3, 'T' => 4];
	$n = strlen($S);
	$P[0] = 0;

	foreach(range(1, $n) as $k)
	{
		$P[$k] = $P[($k - 1)] + $A[$S[($k - 1)]];
	}
	
	return	$P;
}


/*

A DNA sequence can be represented as a string consisting of the letters A, C, G and T, which correspond to the types of successive nucleotides in the sequence. Each nucleotide has an impact factor, which is an integer. Nucleotides of types A, C, G and T have impact factors of 1, 2, 3 and 4, respectively. You are going to answer several queries of the form: What is the minimal impact factor of nucleotides contained in a particular part of the given DNA sequence?

The DNA sequence is given as a non-empty string S = S[0]S[1]...S[N-1] consisting of N characters. There are M queries, which are given in non-empty arrays P and Q, each consisting of M integers. The K-th query (0 ≤ K < M) requires you to find the minimal impact factor of nucleotides contained in the DNA sequence between positions P[K] and Q[K] (inclusive).

For example, consider string S = CAGCCTA and arrays P, Q such that:

    P[0] = 2    Q[0] = 4
    P[1] = 5    Q[1] = 5
    P[2] = 0    Q[2] = 6

The answers to these M = 3 queries are as follows:

        The part of the DNA between positions 2 and 4 contains nucleotides G and C (twice), whose impact factors are 3 and 2 respectively, so the answer is 2.
        The part between positions 5 and 5 contains a single nucleotide T, whose impact factor is 4, so the answer is 4.
        The part between positions 0 and 6 (the whole string) contains all nucleotides, in particular nucleotide A whose impact factor is 1, so the answer is 1.

Write a function:

    function solution($S, $P, $Q); 

that, given a non-empty zero-indexed string S consisting of N characters and two non-empty zero-indexed arrays P and Q consisting of M integers, returns an array consisting of M integers specifying the consecutive answers to all queries.

The sequence should be returned as:

        a Results structure (in C), or
        a vector of integers (in C++), or
        a Results record (in Pascal), or
        an array of integers (in any other programming language).

For example, given the string S = CAGCCTA and arrays P, Q such that:

    P[0] = 2    Q[0] = 4
    P[1] = 5    Q[1] = 5
    P[2] = 0    Q[2] = 6

the function should return the values [2, 4, 1], as explained above.

Assume that:

        N is an integer within the range [1..100,000];
        M is an integer within the range [1..50,000];
        each element of arrays P, Q is an integer within the range [0..N − 1];
        P[K] ≤ Q[K], where 0 ≤ K < M;
        string S consists only of upper-case English letters A, C, G, T.

Complexity:

        expected worst-case time complexity is O(N+M);
        expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).

Elements of input arrays can be modified.

*/
