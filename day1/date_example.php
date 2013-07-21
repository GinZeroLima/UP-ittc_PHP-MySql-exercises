<?

//echo "December 25, 2011 is on a ".date("l", mktime(0,0,0,12,25,2011));


$timestamp = time();
echo strftime("The Date Today is %m/%d/%y",$timestamp);
echo "<br />";
$dt = time();
$mysql_datetime = strftime("%Y-%m-%d %H:%M:%S",$dt);
echo $mysql_datetime;

echo $_SERVER['QUERY_STRING'];

?>