<?

class Person {
	
	function say_hello() {
		
		echo "Hello from inside the class. <br />";
		
	}	
	
}

	$methods = get_class_methods('PDO');

	foreach($methods as $method) {
		echo $method . "<br />";
	}
	
	//$tests = get_class_methods(DateTimeZone);

	//foreach($tests as $test) {
	//	echo $test . "<br />";
	//}
	
	if(method_exists("PDO", 'query')) {
		
		echo "That Method  exists. <br />";
		
	}
	else {
		echo "Method does not exist!  <br />";
		
	}
	
	
	
?>
