<?

function ref_test(&$var){
	$var = $var*2;
	
}
$a= 10;
ref_test($a);
echo " \$a is ".$a;

echo "<br /> <hr /><br />";

function &ref_return(){
	global $a;
	$a = $a * 2;
	return $a;
	
}
	$a = 10;
	$b = &ref_return();
	
	echo "\$a = ".$a."<br />";
	echo "\$b = ".$b."<br />";
	$b = 30;
	echo "\$a = ".$a."<br />";	
	echo "\$b = ".$b."<br />";



?>
