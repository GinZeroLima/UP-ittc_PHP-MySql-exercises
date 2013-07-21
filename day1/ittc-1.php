<?php
//echo "testing";

$sum = 0;

for ($i = 1; $i <= 10 ; $i++){

	$sum += $i;
	$sum_array[$i]=$sum;
}

print "<pre>";

print_r ($sum_array);

print "</pre>";

print "<br />". $sum_array[8];


?>