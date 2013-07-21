<html>
<head>
<title>
String to Array
</title>
</head>

<body>

<?
if(!isset($_POST["list"])){
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
Please enter a list of words.  Each word should be separated by a space:<br />
<input type="text" name="list" size="80" /><br />
<input type="submit" name="submit" value="submit!" />

</form>
<?
}
else{

	$List = $_POST["list"];
	$Array = explode(" ", $List);
	print "Your string <b>$List</b> has been converted into an array.  Below is the array version of your string:<br />";
	
	print "<pre>";
	print_r($Array);
	print "</pre>";
	
}	
?>

</body>

</html>