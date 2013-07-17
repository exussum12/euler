<?php
/*Starting in the top left corner of a 22 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.


How many such routes are there through a 2020 grid?
*/

$size = 20;
$routes = 1;
for ($i = 0;$i < $size; $i++) {
	$routes *= ($size *2)-$i;
	$routes /= $i + 1;
}

echo "Answer = " . $routes;
