<?php
/*
A permutation is an ordered arrangement of objects. For example, 3124 is one possible permutation of the digits 1, 2, 3 and 4. If all of the permutations are listed numerically or alphabetically, we call it lexicographic order. The lexicographic permutations of 0, 1 and 2 are:

012   021   102   120   201   210

What is the millionth lexicographic permutation of the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?
*/

function getComb ($options) {
	$comb= array(0 => 1);
	$start = 1;
	for($i = 1, $count = count($options);$i<$count;$i++){
		$comb[$i] = $start *= $i;
	}
	return $comb;
}

$options = array(
	0,
	1,
	2,
	3,
	4,
	5,
	6,
	7,
	8,
	9,
);

$find = 1000000;

sort($options);
$comb = getComb($options);
$found = "";

for ($i = count($comb) ; $i >0 ; $i--) {
	$amt = $find  / $comb[$i -1];
	$amt = is_int($amt)? $amt-1:(int) $amt;
	$find -= $amt * $comb[$i -1];
	$part = array_splice($options, $amt, 1);
	$options = array_merge($options);
	$found .= current($part);
}
echo "Answer " . $found; 
