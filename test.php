<?php

$A = [2,3,7,5,1,3,9];

function mushrooms($A, $k, $m)
{

	$n = count($A);
	$result = 0;
	$pref = prefix_sums($A);
	//echo min($m, $k) + 1;
	//echo PHP_EOL;
	foreach(range(0, min($m, $k) + 1) as $p)
	{
		$left_pos = $k - $p;
		$right_pos = min($n - 1, max($k, $k + $m - 2 * $p));
		echo $p . ' ' . $left_pos . ' ' . $right_pos . PHP_EOL;
		$result = max($result, $pref[count($pref) -1] + $left_pos + $right_pos);
		//echo $pref + $left_pos + $right_pos . PHP_EOL;
	}
	
	//echo min($m + 1, $n - $k);
	//echo PHP_EOL;
	foreach(range(0, min($m + 1, $n - $k)) as $p)
	{
		$right_pos = $k + $p;
		$left_pos = max(0, min($k, $k - ($m - 2	* $p)));
		$result = max($result, $pref + $left_pos + $right_pos);
	}
	
	return	$result;
}

function prefix_sums($A)
{
	$n = count($A);
	$P[0] = 0;

	foreach(range(1, $n) as $k)
	{
		$P[$k] = $P[($k - 1)] + $A[($k - 1)];
		//echo $A[$k - 1].PHP_EOL;
	}
	
	return	end($P);
}

//print_r(prefix_sums($A));
var_dump(mushrooms($A, 4, 6));