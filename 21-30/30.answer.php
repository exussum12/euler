<?php
/*
Surprisingly there are only three numbers that can be written as the sum of fourth powers of their digits:

1634 = 14 + 64 + 34 + 44
8208 = 84 + 24 + 04 + 84
9474 = 94 + 44 + 74 + 44
As 1 = 14 is not a sum it is not included.

The sum of these numbers is 1634 + 8208 + 9474 = 19316.

Find the sum of all the numbers that can be written as the sum of fifth powers of their digits.
*/

$l = 5;
$to = pow(9,$l) * $l;
$answer = 0;
for($i=2;$i<$to;$i++){
	$sum = 0;
	$num = str_split((string) $i);
	foreach($num as $t) {
		$sum += pow($t,5);
	}
	if ($sum == $i) {
		$answer += $i;
	}
}
echo "Answer = " . $answer;
