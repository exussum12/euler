<?php
/*
2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/


function multipleBelow($max =20){
	$found= array() ;
	for($i=3;$i<20;$i+=2){
		foreach($found as $num => $j){
			if($i % $j == 0 ){
				if($j != 5){
					unset($found[$num]);
				}else{
					continue 2;
				}
			}
		}
		$found[] = $i;
	}
	$found[]= pow(2, floor(log($max, 2)));
	$product =1;
	foreach ($found as $number){
		$product *= $number;
	}
	return $product;
}
echo "Answer: " . multipleBelow() ;
