<html>
<head>
<title>
ARRAY FUNCTIONS
</title>
</head>

<body>

<?

$numbers = array(100, 200, 300, 400, 500, 600);

print "<pre>";
print_r($numbers);
print "<pre>";

//$first = array_unshift($numbers, 75);
array_unshift($numbers, 75);
echo "last:". $first."<br />";
print "<pre>";
print_r($numbers);
print "</pre";


?>

</body>

</html>