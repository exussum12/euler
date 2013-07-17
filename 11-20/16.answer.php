<?php
/*
215 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.

What is the sum of the digits of the number 21000?
*/
$ans =  sprintf('%0.0f',pow(2,1000)); 

$length = strlen($ans);
$total =0;
for ($i=0;$i<$length;$i++){
	$total += $ans[$i];
}

echo "Answer : " .$total;
