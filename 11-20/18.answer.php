<?php
/*
By starting at the top of the triangle below and moving to adjacent numbers on the row below, the maximum total from top to bottom is 23.

3
7 4
2 4 6
8 5 9 3

That is, 3 + 7 + 4 + 9 = 23.

Find the maximum total from top to bottom of the triangle below:
NOTE: As there are only 16384 routes, it is possible to solve this problem by trying every route. However, Problem 67, is the same challenge with a triangle containing one-hundred rows; it cannot be solved by brute force, and requires a clever method! ;o)

*/

$triangle = file_get_contents("67.input.txt");
$triangle = explode("\n" , $triangle);
foreach($triangle as &$line){

	$line = preg_split("/[\s]+/", $line);
}
for($i = (count($triangle)-3); $i > -1 ; $i--){
	for($j = 0; $j < count($triangle[$i]) ; $j++){
		$triangle[$i][$j] += max($triangle[$i+1][$j] , $triangle[$i+1][$j+1]);
	}
	unset($triangle[$i+1]);

}
$answer = $triangle[0][0];
echo "Answer = " . $answer;
