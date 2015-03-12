<?php

//$A[0] = 1;
//$A[1] = 3;
//$A[2] = 6;
//$A[3] = 4;
//$A[4] = 1;
//$A[5] = 2;

$A[0] = 1;
//
//$A[0] = 4;
//$A[1] = 5;
//$A[2] = 6;
//$A[3] = 2;

//$A[0] = -2147483648;
//$A[1] = 2147483647;

$A[0] = -84   ;
$A[1] = -17   ;
$A[2] = -71   ;
$A[3] = -26   ;
$A[4] = -95   ;
$A[5] = -11   ;
$A[6] = -79   ;
$A[7] = -39   ;
$A[8] = -100  ;
$A[9] = -93   ;
$A[10] = -37  ;
$A[11] = -29  ;
$A[12] = -53  ;
$A[13] = -76  ;
$A[14] = -57  ;
$A[15] = -48  ;
$A[16] = -18  ;
$A[17] = -15  ;
$A[18] = -19  ;
$A[19] = -89  ;
$A[20] = -58  ;
$A[21] = -42  ;
$A[22] = -10  ;
$A[23] = -2   ;
$A[24] = -96  ;
$A[25] = -68  ;
$A[26] = -66  ;
$A[27] = -33  ;
$A[28] = -45  ;
$A[29] = -50  ;
$A[30] = -77  ;
$A[31] = -25  ;
$A[32] = -82  ;
$A[33] = -91  ;
$A[34] = -75  ;
$A[35] = -9   ;
$A[36] = -56  ;
$A[37] = -59  ;
$A[38] = -43  ;
$A[39] = -5   ;
$A[40] = -36  ;
$A[41] = -6   ;
$A[42] = -40  ;
$A[43] = -44  ;
$A[44] = -61  ;
$A[45] = -28  ;
$A[46] = -16  ;
$A[47] = -22  ;
$A[48] = -81  ;
$A[49] = -60  ;
$A[50] = -47  ;
$A[51] = -13  ;
$A[52] = -12  ;
$A[53] = -80  ;
$A[54] = -8   ;
$A[55] = -70  ;
$A[56] = -35  ;
$A[57] = -72  ;
$A[58] = -41  ;
$A[59] = -73  ;
$A[60] = -78  ;
$A[61] = -85  ;
$A[62] = -97  ;
$A[63] = -1   ;
$A[64] = -31  ;
$A[65] = -52  ;
$A[66] = -24  ;
$A[67] = -30  ;
$A[68] = -63  ;
$A[69] = -20  ;
$A[70] = -67  ;
$A[71] = -92  ;
$A[72] = -87  ;
$A[73] = -54  ;
$A[74] = -62  ;
$A[75] = -55  ;
$A[76] = -49  ;
$A[77] = -3   ;
$A[78] = -99  ;
$A[79] = -34  ;
$A[80] = -14  ;
$A[81] = -94  ;
$A[82] = -65  ;
$A[83] = -27  ;
$A[84] = -86  ;
$A[85] = -64  ;
$A[86] = -51  ;
$A[87] = -98  ;
$A[88] = -4   ;
$A[89] = -69  ;
$A[90] = -7   ;
$A[91] = -46  ;
$A[92] = -83  ;
$A[93] = -32  ;
$A[94] = -74  ;
$A[95] = -90  ;
$A[96] = -38  ;
$A[97] = -23  ;
$A[98] = -88  ;
$A[99] = -21  ;
    
var_dump(solution($A));

function solution($A) {
    
    $C = count($A) + 1;
    for($i = 0; $i < count($A); $i++)
    {
		if (!isset($B[$A[$i]]))
		{
			$B[$A[$i]] = 1;
		}
	}
	
	//print_r($B);
	
	for($i = 1; $i < $C; $i++)
	{
		if (!isset($B[$i])) return $i;
	}
	
	return 0;
}

/*

Write a function:

function solution($A);

that, given a non-empty zero-indexed array A of N integers, returns the minimal positive integer that does not occur in A.

For example, given:

  A[0] = 1
  A[1] = 3
  A[2] = 6
  A[3] = 4
  A[4] = 1
  A[5] = 2
the function should return 5.

Assume that:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−2,147,483,648..2,147,483,647].
Complexity:

expected worst-case time complexity is O(N);
expected worst-case space complexity is O(N), beyond input storage (not counting the storage required for input arguments).
Elements of input arrays can be modified.

*/
