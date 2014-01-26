<?php
/*
In England the currency is made up of pound, £, and pence, p, and there are eight coins in general circulation:

1p, 2p, 5p, 10p, 20p, 50p, £1 (100p) and £2 (200p).
It is possible to make £2 in the following way:

1×£1 + 1×50p + 2×20p + 1×5p + 1×2p + 3×1p
How many different ways can £2 be made using any number of coins?
*/
$t = 200;
$c = array(1,2,5,10,20,50,100,200);
$w = array_fill_keys(range(0,$t),0);
$w[0] =1;
for ($i = 0, $count = count($c);$i < $count; $i++) {
	for ($j = $c[$i]; $j <= $t; $j++) {
		$w[$j] += $w[$j - $c[$i]];
	}
}
echo "Answer : " . (end($w));
