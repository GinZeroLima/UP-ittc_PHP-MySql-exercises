<?php

$array = array(
	"name"=>"eden",
	"address"=>"qc",
	"position"=>"clerk",
	"bday"=>"1980-10-10");

sort($array);
//rsort($array);
//asort($array);
//arsort($array);
//ksort($array);
//krsort($array);

print "<pre>"; print_r($array); print "</pre>";
?>