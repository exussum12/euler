<?php
/*
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?
*/

$answer = 1;
$number = 600851475143;

$max= (int)sqrt($number);
$prime =0;
while($prime < $max) {
	$prime = (int) gmp_strval(gmp_nextprime($prime));
	if(fmod($number,$prime) == 0) {//fmod because % doesnt support large numbers
		$answer =$prime;
	}	

}


echo "Answer : " . $answer;
