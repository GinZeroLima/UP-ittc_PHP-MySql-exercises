<html>
<head>
<title>
USING ARRAYS
</title>
</head>

<body>

<?
	$soup = array(
		"Monday"=>"Sinigang",
		"Tuesday"=>"Nilaga",
		"Wednesday"=>"Tinola"
	);
	$HowMany = count($soup);
	print("<p>The array contains $HowMany elements.</p>");

	$soup["Thursday"]= "Chicken Noodle Soup";
	$soup["Friday"]= "Cream of Mushroom Soup";
	$soup["Saturday"]= "Cream of Asparagus";
	$HowManyNow = count($soup);
	print("<p>The array now contains $HowManyNow elements.</p>");
?>

</body>

</html>