<?php

$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

$count =1;
foreach($months as $current_month){
	print "$current_month has "
		.cal_days_in_month(1, $count, date("Y") ).
		//.cal_to_jd(3, $count, date("d"), date("Y") ).
		" days <br />";
	$count++;
}

echo "<hr><br />";

$months = array("September", "October", "November", "December");
for($i=0; $i<= count($months);$i++){
	print $months[$i]."<br />";
	
}

?>