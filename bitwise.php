<?php

echo 8 >> 1;

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

define("YES", 1);
define("NO", 2);
define("OK", 4);
define("CANCEL", 8);

function showPopup($buttons)
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

showPopup(CANCEL);

// Manipulate colors
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

//Swipe two vars
$x = 15;
$y = 33;

$x ^= $y;
$y ^= $x;
$x ^= $y;

var_dump($x, $y);

//Compute the sign of an integer 
define('CHAR_BIT', 8);
$v = -8;
var_dump(decbin(-8));
var_dump(decbin(8));
var_dump(decbin(-1));
var_dump(-($v < 0));
var_dump($v >> (PHP_INT_SIZE * CHAR_BIT - 1)); // -1 or 0
var_dump(($v != 0) | ($v >> (PHP_INT_SIZE * CHAR_BIT - 1)));  // -1, 0, or +1

