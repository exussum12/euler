<?php
/*
The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?
*/

$answer = 1;
$number = 600851475143;

$prime = 0;
while($prime < $number) {
	$prime = (int) gmp_strval(gmp_nextprime($prime));
	while(true){
		if(fmod($number,$prime) == 0) {
			$number /= $prime;
			$answer = $prime;
		} else { 
			break;
		}
	}
}


echo "Answer : " . $answer;
