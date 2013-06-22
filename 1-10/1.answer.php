<?php 
$answer = 0;
for ($i=0;$i<1000;$i++){
	if(!($i % 3)|| !($i % 5)){
		$answer += $i;
	}
}
echo "Answer = " . $answer;
