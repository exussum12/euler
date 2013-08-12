<?php
/*
If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.

If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used?


NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen) contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.
*/

function findNumber($number){
	$numbers = array(
		4,
		3,
		3,
		5,
		4,
		4,
		3,
		5,
		5,
		4,
		3,
		6,
		6,
		8,
		8,
		7,
		7,
		9,
		8,
		8,
		20 => 6,
		30 => 6,
		40 => 5,
		50 => 5,
		60 => 5,
		70 => 7,
		80 => 6,
		90 => 6,
		100 => 7,
		1000 => 8,
		1000000 => 7,	
		2147483647 => 99999,	
		);

	$final = 0;
	end($numbers);
	$number = (int) $number;
	while(prev($numbers) !== false && $number > 0){
		$flag = false;
		if ($number >= key($numbers)){
			//echo "STARTING " . key($numbers);
			if ($number >= 100){ 
				$final += findNumber(floor($number/key($numbers))) ; 
				$number -= floor($number/key($numbers)) * key($numbers);
				if($number >0 && $number< 100) $flag = true; 
			}else{
				$number-=key($numbers);
			}	
			$final += current($numbers);
			if($flag) $final +=3;
		}

	}

	return $final;
}


$answer =0;
for($i=1; $i<=1000; $i++){
	$answer += findNumber($i);
} 

echo "Answer = ". $answer;
