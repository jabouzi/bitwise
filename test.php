<?php

$A = [4,2,2,5,1,5,8];

$X = 0;
$Y = 1;
$M1 = PHP_INT_MAX;
$M2 = count($A);
$C = (count($A)*(count($A) - 1)) / 2;
$B = [];
for($i = 0; $i < $C; $i++)
{
	echo $M2 .' -> '.$X.', '.$Y.PHP_EOL;
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
		//$X++;
	}
	else
	{
		$X++;
		$Y = $X + 1;
	}
}

print_r($B);
echo $M2;

exit;

function mushrooms($A, $k, $m)
{
	$n = count($A);
	$result = 0;
	$pref = prefix_sums($A);
	//echo min($m, $k) + 1;
	//echo PHP_EOL;
	foreach(range(0, min($m, $k)) as $p)
	{
		//echo $p . PHP_EOL;
		$left_pos = $k - $p;
		$right_pos = min($n - 1, max($k, $k + $m - 2 * $p));
		echo $p . ' ' . $left_pos . ' ' . $right_pos . PHP_EOL;
		$result = max($result, count_total($pref, $left_pos, $right_pos));
		//echo $pref + $left_pos + $right_pos . PHP_EOL;
	}
	
	//echo min($m + 1, $n - $k);
	//echo PHP_EOL;
	echo "###############\n";
	foreach(range(0, min($m + 1, $n - $k) - 1) as $p)
	{
		//echo $p . PHP_EOL;
		$right_pos = $k + $p;
		$left_pos = max(0, min($k, $k - ($m - 2	* $p)));
		echo $p . ' ' . $left_pos . ' ' . $right_pos . PHP_EOL;
		$result = max($result, count_total($pref, $left_pos, $right_pos));
	}
	
	return	$result;
}

function count_total($P, $x, $y)
{
	return $P[$y + 1] - $P[$x];
}

function prefix_sums($A)
{
	$n = count($A);
	$P[0] = 0;

	foreach(range(1, $n) as $k)
	{
		$P[$k] = $P[($k - 1)] + $A[($k - 1)];
	}
	
	return	$P;
}

print_r(prefix_sums($A));
var_dump(mushrooms($A, 4, 6));
