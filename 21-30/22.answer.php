<?php
/*Using names.txt (right click and 'Save Link/Target As...'), a 46K text file containing over five-thousand first names, begin by sorting it into alphabetical order. Then working out the alphabetical value for each name, multiply this value by its alphabetical position in the list to obtain a name score.

For example, when the list is sorted into alphabetical order, COLIN, which is worth 3 + 15 + 12 + 9 + 14 = 53, is the 938th name in the list. So, COLIN would obtain a score of 938 × 53 = 49714.

What is the total of all the name scores in the file?
*/

$names = explode(',',str_replace('"','',file_get_contents('names.txt')));
sort($names);

$sum = 0;
foreach($names as $k => $v){
	$stringLength = strlen($v);
	$nameScore = 0;
	for ($i = 0; $i < $stringLength; $i++){
		$nameScore += ord($v[$i]) - 64;
	}
	$sum += $nameScore * ($k +1);
}

echo "Answer = " . $sum;
