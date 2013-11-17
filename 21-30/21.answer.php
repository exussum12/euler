<?php
/*Let d(n) be defined as the sum of proper divisors of n (numbers less than n which divide evenly into n).
If d(a) = b and d(b) = a, where a ≠ b, then a and b are an amicable pair and each of a and b are called amicable numbers.

For example, the proper divisors of 220 are 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 and 110; therefore d(220) = 284. The proper divisors of 284 are 1, 2, 4, 71 and 142; so d(284) = 220.

Evaluate the sum of all the amicable numbers under 10000.
*/


require_once('../helper.php');
$h = new primes();
$calculated = array();
$answer = 0;
for($i = 1; $i<10000;$i++){
	//get a list of divisors, and add them to list
	$calculated[$i] = 0;
	$div = $h->getDivisors($i);
	foreach($div as $number){
		if($number !== $i){
			$calculated[$i] += $number;
		}
	}
	
	if($calculated[$i] < $i && $i === $calculated[$calculated[$i]]){
		$answer += $calculated[$i];
		echo "pair found " . $calculated[$i] . " " . $calculated[$calculated[$i]]  . "\r\n"; 
		$answer += $calculated[$calculated[$i]];
	}
}


echo "Answer $answer";

