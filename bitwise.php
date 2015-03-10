<?php

//echo 0b101;
//echo 0b101 & 0b010;
var_dump(3 & 1);

$randInt = rand ( 1, 1000 );
var_dump($randInt);
if($randInt & 1)
{
    echo("Odd number.");
}
else
{
    echo("Even number.");
}

echo PHP_EOL;

function showPopup1($yesButton, $noButton, $okayButton, $cancelButton)
{
	if($yesButton)
	{
		echo "YES\n";
	}
	 
	if($noButton)
	{
		echo "NO\n";
	}
	 
	if($okayButton)
	{
		echo "OK\n";
	}
	 
	if($cancelButton)
	{
		echo "CANCEL\n";
	}

}

showPopup1(false, false, false, true);

define("YES", 1);
define("NO", 2);
define("OK", 4);
define("CANCEL", 8);

function showPopup2($buttons)
{
	if($buttons & YES)
	{
		echo "YES\n";
	}
	 
	if($buttons & NO)
	{
		echo "NO\n";
	}

	if($buttons & OK)
	{
		echo "OK\n";
	}
	 
	if($buttons & CANCEL)
	{
		echo "CANCEL\n";
	}
}

showPopup2(CANCEL);

$color1 = 0xADD8E6;
$color2 = 0x90ee90;

var_dump(dechex($color1), dechex($color2));

$r1 = ($color1 & 0xFF0000) >> 16;
var_dump(dechex($r1));
$g1 = ($color1 & 0x00FF00) >> 8;
var_dump(dechex($g1));
$b1 = ($color1 & 0x0000FF);
var_dump(dechex($b1));

$color1 = $color1 & 0xFF00FF;
var_dump(dechex($color1));
$g1 = 0x00A600;
$color1 = $color1 | $g1;
var_dump(dechex($color1));

$x = 15;
$y = 33;

$x ^= $y;
$y ^= $x;
$x ^= $y;

var_dump($x, $y);

var_dump(8 ^ 6);
var_dump(2 ^ 6);
var_dump(8 ^ 10);
var_dump(12 ^ 10);
var_dump(12 ^ 14);

