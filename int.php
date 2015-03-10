<?php

var_dump(PHP_INT_SIZE);
var_dump(PHP_INT_MAX);

var_dump(decbin(2147483647));
var_dump(decbin(PHP_INT_MAX));
var_dump(0b111111111111111111111111111111111111111111111111111111111111111);
var_dump(~0b111111111111111111111111111111111111111111111111111111111111111);
var_dump(0b101);
var_dump(~0b101);

print "\n Signed 64-bit integer positive overflow test:\n";
$integerLimit =  PHP_INT_MAX; 
$integerOverflow = intval(PHP_INT_MAX + 1);
print "    Integer upper limit: "; var_dump($integerLimit);
print "   Upper limit overflow: "; var_dump($integerOverflow);

print "\n Signed 64-bit integer positive overflow test:\n";
$integerLimit =  -PHP_INT_MAX;
$integerOverflow = - PHP_INT_MAX - 1 - 1;
print "    Integer lower limit: "; var_dump($integerLimit);
print "   Lower limit overflow: "; var_dump($integerOverflow);

print "\n 64-bit floating point number overflow test:\n";
$floatLimit = 1.0;
$floatOverflow = $floatLimit*10;
while (!is_infinite($floatOverflow)) {
   $floatLimit *= 10;
   $floatOverflow = $floatLimit*10;
}	
print "   Float high limit: "; var_dump($floatLimit);
print "     Float overflow: "; var_dump($floatOverflow);

print "\n 64-bit floating point number underflow test:\n";
$floatLimit = 1.0;
$floatUnderflow = $floatLimit/10;
while (!$floatUnderflow==0) {
   $floatLimit /= 10;
   $floatUnderflow = $floatLimit/10;
}
print "   Float low limit: "; var_dump($floatLimit);
print "   Float underflow: "; var_dump($floatUnderflow);
