<?php
/*
The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

Find the sum of all the primes below two million.
*/

$i = $answer = 0;
$max = 2000000;
while($i<$max){
	$answer += $i;
	$i =(int) gmp_strval(gmp_nextprime($i));
	
}

echo "Answer : " . $answer; 


