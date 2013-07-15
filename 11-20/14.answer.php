<?php
/*
The following iterative sequence is defined for the set of positive integers:

n  n/2 (n is even)
n  3n + 1 (n is odd)

Using the rule above and starting with 13, we generate the following sequence:

13  40  20  10  5  16  8  4  2  1
It can be seen that this sequence (starting at 13 and finishing at 1) contains 10 terms. Although it has not been proved yet (Collatz Problem), it is thought that all starting numbers finish at 1.

Which starting number, under one million, produces the longest chain?

NOTE: Once the chain starts the terms are allowed to go above one million.
*/


$maxNum =0;
$maxLength =0;
$lookUp = array();
for($i=999999;$i>500000;$i+=-2){
	$numbers = array($i);
	$num=$i;
	$length = 0;
	while($num != 1){
		if($num < 1000000 &&is_int($num)  &&  array_key_exists($num, $lookUp)){
			$length += $lookUp[$num];
			$num = 1;

		}else{ 
			$num = (fmod($num,2) == 0)?$num/2:(3*$num)+1;
			$numbers[] = $num;
			$length++;
		}
	}
	if($length > $maxLength){
		$maxLength = $length;
		$maxNum = $i;
	}	
	while (list($key, $val) = each($numbers)) {
		if($val <1000000){
			$lookUp[$val] = $length;
		}
		$length--;
	}

}
echo "Answer = " . $maxNum . " with Length " . $maxLength;
