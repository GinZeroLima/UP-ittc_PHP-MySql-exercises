<?

	class Person {
		var $first_name;
		var $last_name;
		var $arm_count = 2;
		var $leg_count = 2;
		
		function say_hello() {
				echo "Hello from inside the class ".get_class($this)."<br />";
		}
		function full_name() {
			return $this->first_name ." ".$this->last_name;
		}
		
	}
	
	$person1 = new Person();
	echo "Right now Person1 has ".$person1->arm_count." arms <br />";
	
	$person1 ->arm_count = 3;
	echo "Now Person1 has ".$person1->arm_count."arms <br />";
	
	$person1->first_name = 'Sheila';
	$person1->last_name = 'Magboo';
	
	$person2 = new Person();
	$person2->first_name = 'Greg';
	$person2->last_name = 'Baes';
	
	echo "Person1's fullname is ".$person1->full_name().".<br />";
	echo "Person2's fullname is ".$person2->full_name().".<br />";
	
	echo "Here are the properties of class Person: <br />";
	$vars = get_class_vars(get_class($person1));
	foreach($vars as $var => $value) {
		echo "{$var} = {$value}<br />";
		//echo "$var = $value<br />";
		
	}
	
	echo (property_exists('Person', 'first_name')? "Yes, Person has 'first_name' property" : "No, Person does not have 'frist_name' property");

?>