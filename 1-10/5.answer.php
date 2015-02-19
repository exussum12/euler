<?php
/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/


function multipleBelow($max =20){
	$found = array();
	$sqrt = sqrt($max);
	$prime = 0;
	while (($prime = (int) gmp_strval(gmp_nextprime($prime))) < $max) {
		if ($prime < $sqrt) {
			$found[]= pow($prime, floor(log($max, $prime)));
		} else {
			$found[] = $prime;
		}
	}

	return array_product($found);
}
echo "Answer: " . multipleBelow() ;
