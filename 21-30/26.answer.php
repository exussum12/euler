<?php
/*
A unit fraction contains 1 in the numerator. The decimal representation of the unit fractions with denominators 2 to 10 are given:

1/2	=		0.5
1/3	=		0.(3)
1/4	=		0.25
1/5	=		0.2
1/6	=		0.1(6)
1/7	=		0.(142857)
1/8	=		0.125
1/9	=		0.(1)
1/10	=		0.1
Where 0.1(6) means 0.166666..., and has a 1-digit recurring cycle. It can be seen that 1/7 has a 6-digit recurring cycle.

Find the value of d < 1000 for which 1/d contains the longest recurring cycle in its decimal fraction part.

*/
$max = $answer = 0 ;
$base = gmp_init("10");
for($i = 1000;$i > 1 ;$i--) {
	if($max > $i){
		break;
	}
	$found = array();
	$j = $repeating = 0;
	$i_gmp =  gmp_init($i);
	while(true) {
		$mod = gmp_strval(gmp_mod(gmp_pow($base, $j) ,$i_gmp));
		if($mod == 0){
			$repeating = 0;
			$break;
		}
		if(in_array($mod,$found)) {
			$repeating = count($found) - array_search($mod, $found);
			break;
		}
		$found[$j] = $mod;
		$j++;
	}
	if($repeating > $max) {
		$max = $repeating;
		$answer = $i;
	}
}
	echo "Answer = " . $answer . " with " . $max;

