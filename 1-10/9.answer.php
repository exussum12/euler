<?php
/*
A Pythagorean triplet is a set of three natural numbers, a  b  c, for which,

a2 + b2 = c2
For example, 32 + 42 = 9 + 16 = 25 = 52.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.


Found by Hand, using http://en.wikipedia.org/wiki/Pythagorean_triple formulas
*/

$sumOfFactors = 1000;

$max =(int)sqrt($sumOfFactors/2);
for($i=$max;$i>0;$i--){
	for($j=$i;$j>0;$j--){
		if($j == ((($sumOfFactors/2)-($i*$i))/$i)) break 2;
	}
}


$answer = (($i*$i)-($j*$j))*(2*$i*$j)*(($i*$i)+($j*$j));

echo "Answer : " . $answer;
