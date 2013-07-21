<?Php
	
	class Quad {
	
		var $length;
		var $width;
		
		function get_info() {
			$this->length = $_POST['length'];
			$this->width = $_POST['width'];
			
		}
		
		function check_Square() {
			$this->get_info();
			
			if($this->length == $this->width){
				return true;
			}else{
				return false;
			}
		}
		
		function get_area(){
			$this->get_info();
			$area = $this->length * $this->width;
			return $area;
		}
		function get_perimeter(){
			$this->get_info();
			if($this->check_Square() === true){
				$perimeter = $this->length * 4;
				return $perimeter;
			}
			else{
				$perimeter = ($this->length + $this->width)*2;
				return $perimeter;
			}
		}
		
	}
	
	

if(isset($_POST['submit'])){

$test = new Quad;


$target = $test->check_Square()===true ? "SQUARE" : "RECTANGLE";
echo "Quadrelateral is a $target <br />";

echo "Area is :".$test->get_area();
echo "<br />";
echo "Perimeter is :".$test->get_perimeter();

exit;
}

?>

<!DOCTYPE html>
<html>
	<head>
	</head>


	<body>	
	<h2>Enter Length and width of quadrelateral</h2>
	<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
	<label>
	Length
	</label>
	<input type="text"name="length" />
	<br />
	<label>
	Width
	</label>
	<input type="text"name="width" />	
	
	<input type="submit" name="submit" />
	</form>
	
	</body>

</html>