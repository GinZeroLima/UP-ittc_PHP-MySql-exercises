<?
class Person {
	
	
}

	$classes = get_declared_classes();

	foreach($classes as $class) {
		echo $class . "<br />";
	}
	
	//$tests = get_class_methods(DateTimeZone);

	//foreach($tests as $test) {
	//	echo $test . "<br />";
	//}
	
	if(class_exists("PDO")) {
		
		echo "That class has been defined. <br />";
		
	}
	else {
		echo "Class not defined!  <br />";
		
	}
	
	
	
?>
