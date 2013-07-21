<?Php

	class Couple {
	
		var $husand_name;	
		var $husband_firstname;
		var $husband_lastname;
		var $wife_firstname;
		var $wife_lastname;
		var $wedding_date;
		var $wedding_day;
		
		function gather_info() {
			
			$this->husband_firstname = $_POST['husband_firstname'];
			$this->husband_lastname = $_POST['husband_lastname'];
			$this->wife_firstname = $_POST['wife_firstname'];
			$this->wife_lastname = $_POST['wife_lastname'];
			$this->wedding_date = $_POST['wedding_date'];
			$this->wedding_day = $_POST['wedding_day'];
			//return $this->husband_firstname;
		}
		
		function husband_Married_Name() {
			$this->gather_info();
			return $this->husband_name = ucwords($this->husband_firstname)." ".ucwords($this->husband_lastname);
		}
		
		function wife_Married_Name() {
			$this->gather_info();
			return $this->wife_name = ucwords($this->wife_firstname)." ".ucwords($this->husband_lastname);
		}
		
		function wedding_day() {
			$this->gather_info();
			$date['date']=$this->wedding_date;
			$date['day']=date("l", strtotime($this->wedding_date));
			return $date;
		}
		
		
		
	}



if(isset($_POST['submit'])){

	
	
	$test = new Couple;
	
	echo "Groom's Name is - ".$test->husband_Married_Name();
	echo "<br />";
	echo "Bride's Name is - ".$test->wife_Married_Name();
	echo "<br />";
	$dates = $test->wedding_day();
	
	echo "<br /> Wedding will be on ".$dates['date']." which is on a ".$dates['day'];
	
	
exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
	</head>


	<body>
	<h2>Bride and Groom wedding info</h2>	
	
	<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
	<label>
	Groom First Name
	</label>
	<input type="text"name="husband_firstname" />
	<br />
	<label>
	Groom Last Name
	</label>
	<input type="text"name="husband_lastname" />
	<br />
	<br />
	<label>
	Bride First Name
	</label>
	<input type="text"name="wife_firstname" />
	<br />
	<label>
	Bride Last Name
	</label>
	<input type="text"name="wife_lastname" />
	<br /><br />
	<label>
	Wedding Date YYYY-MM-DD
	</label>
	<input type="text"name="wedding_date" />
	<label>
	
	
	
	<input type="submit" name="submit" />
	</form>
	
	</body>

</html>