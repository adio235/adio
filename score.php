<?php
$scores = [04,23,95,23,40];
$max = 0;
foreach ($scores as $num) {
	if ($max < $num) {
	$max = $num;	
	}		
}
echo $max;
?>