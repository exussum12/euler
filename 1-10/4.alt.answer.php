<?php
/*
A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 99.

Find the largest palindrome made from the product of two 3-digit numbers.
*/

$largest = 9009;
$temp="";
for($i=1;$i<1000;$i++){
	for($j=1;$j<1000;$j++){
		$temp = $i*$j;
		if ($temp < $largest) {
			continue;
		}
		$temp = (string) $temp;
		$start = 0;
		$end = strlen($temp) - 1;

		while ($end > $start)
		{
			if ($temp{$start} != $temp{$end}) {
				break;
			}
			++$start;
			--$end;
		}
		if ($start >= $end) {
			$largest = $temp;
		}
		
	}
}

echo "Answer = " . $largest;
